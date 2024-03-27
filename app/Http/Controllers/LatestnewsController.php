<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\latestnews;
class LatestnewsController extends Controller
{

    
     /**
     * 最新新闻列表
     *
     */
    public function latestnews(Request $request){
        $list =  DB::table('latestnews')->get();
        return view('latestnews.latestnews',['list'=>$list]);
    }

     /**
     * 最新新闻添加
     *
     */
    public function latestnewsadd(Request $request){
        if ($request->isMethod('post')) { //如果是post请求添加最新新闻 
            $data = $request->post();//获取参数
            $path = $request->file('image')->store('/avatars');
            $data['image'] = $path;
            $data['createtime'] = date('Y-m-d H:i:s',time());
            unset($data['_token']);
            $res = DB::table('latestnews')->insert($data);
            if($res){
                return redirect('/prompt')->with(['message' => 'success', 'url' => '/latestnews', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'fail', 'url' => '/latestnewsadd', 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            return view('latestnews.latestnewsadd');
        }
    }


     /**
     * 修改最新新闻
     *
     */
    public function latestnewsedit(Request $request,$id){
        if ($request->isMethod('post')) { //如果是post请求添加用户 
            $data = $request->post(); //获取参数
            $id = $data['id'];
            unset($data['id'],$data['_token']);
            if(!empty($_FILES['image']['name'])){
                $data['image'] = $request->file('image')->store('/avatars');
            }
            $res = DB::table('latestnews')->where(['id'=>$id])->update($data);
            if($res){
                return redirect('/prompt')->with(['message' => 'Successfully modified', 'url' => '/latestnews', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'fail to edit', 'url' => '/latestnewsedit/'.$id, 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            $latestnewsInfo = DB::table('latestnews')->where(['id'=>$id])->first();
            return view('latestnews.latestnewsedit',['info'=>$latestnewsInfo]);
        }
    }




   /**
     * 删除最新新闻
     *
     */
    public function latestnewsdel(Request $request,$id){
        $latestnewsInfo = DB::table('latestnews')->where(['id'=>$id])->delete();
        return redirect('/prompt')->with(['message' => 'successfully deleted', 'url' => '/latestnews', 'jumpTime' => 3, 'status' => false]);
    }

    /**
     * 上传图片
     *
     */
    public function uploade(Request $request){
        $path = $request->file('avatar')->store('avatars');
        return $path;
    }

}