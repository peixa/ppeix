<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * 显示给定用户的个人资料。
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post();//获取参数
            $Info = DB::table('admin')->where(['name'=>$data['name'],'password'=>$data['password']])->first();
            if($Info){ //账号密码正确
                session(['admin_id' =>$Info->id]); //存储登录状态
                return redirect('/prompt')->with(['message' => 'success', 'url' => '/index', 'jumpTime' => 3, 'status' => false]);
            }else{

            }
           
        }else{
            return view('admin.log');
        }
    }
    //退出登录
    public function logout(){
        session(['admin_id' =>NULL]); //清空登录状态
        return redirect('/prompt')->with(['message' => 'success', 'url' => '/index', 'jumpTime' => 3, 'status' => false]);
    }



     /**
     * 后台首页
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request){
        //检测用户是否登录
        if ($request->session()->has('admin_id')) {
            return view('admin.index');
        }else{
            return redirect()->action([AdminController::class, 'login']);
        }
    }

     /**
     * 用户列表
     *
     */
    public function user(Request $request){
        $data = $request->post();
        $where = [];
        if(!empty($data['phone'])){
            $where['phone'] = $data['phone'];
        }
        $list =  DB::table('user')->where($where)->get();
        return view('admin.user',['list'=>$list]);
    }

     /**
     * 用户添加
     *
     */
    public function useradd(Request $request){
        if ($request->isMethod('post')) { //如果是post请求添加用户 
            $data = $request->post(); //获取参数
            $info = DB::table('user')->where(['phone'=>$data['phone']])->first();
            if($info){
                return redirect('/prompt')->with(['message' => 'The mobile phone number already exists', 'url' => '/useradd', 'jumpTime' => 3, 'status' => false]);
            }
            $res = DB::table('user')->insert(['phone'=>$data['phone'],'name'=>$data['name'],'password'=>$data['password'],'sex'=>$data['sex']]);
            if($res){
                return redirect('/prompt')->with(['message' => 'success', 'url' => '/useradd', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'fail', 'url' => '/user', 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            return view('admin.useradd');
        }
    }

     /**
     * 修改用户
     *
     */
    public function useredit(Request $request,$id){
        if ($request->isMethod('post')) { //如果是post请求添加用户 
            $data = $request->post(); //获取参数
            $id = $data['id'];
            unset($data['id'],$data['_token']);
            $res = DB::table('user')->where(['id'=>$id])->update($data);
            if($res){
                return redirect('/prompt')->with(['message' => 'success', 'url' => '/user', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'fail', 'url' => '/useredit/'.$id, 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            $UserInfo = DB::table('user')->where(['id'=>$id])->first();
            return view('admin.useredit',['UserInfo'=>$UserInfo]);
        }
    }

   /**
     * 删除用户
     *
     */
    public function userdel(Request $request,$id){
        $UserInfo = DB::table('user')->where(['id'=>$id])->delete();
        return redirect('/prompt')->with(['message' => 'success', 'url' => '/user', 'jumpTime' => 3, 'status' => false]);
    }

    //用户订单
    public function userorder(){
        $list = DB::table('cart')->orderBy('createtime','desc')->get();
        foreach($list as &$v){
            $v->user = DB::table('user')->where(['id'=>$v->user_id])->first();
            $v->goods = DB::table('deliciousfood')->where(['id'=>$v->goods_id])->first();
        }
        return view('admin.userorder',['list' => $list]);
    }





    public function prompt(){
            //验证参数
            if(!empty(session('message')) && !empty(session('url')) && !empty(session('jumpTime'))){
                $data = [
                    'message' => session('message'),
                    'url' => session('url'),
                    'jumpTime' => session('jumpTime'),
                    'status' => session('status')
                ];
            } else {
                $data = [
                    'message' => 'Please do not access illegally!',
                    'url' => '/',
                    'jumpTime' => 3,
                    'status' => false
                ];
            }
            return view('admin.prompt',['data' => $data]);
    }

}