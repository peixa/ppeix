<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\model;
class ModelController extends Controller
{

    
     /**
     * 论坛模块列表
     *
     */
    public function model(Request $request){
        $list =  DB::table('model')->get();
        return view('model.model',['list'=>$list]);
    }

     /**
     * 论坛模块添加
     *
     */
    public function modeladd(Request $request){
        if ($request->isMethod('post')) { //如果是post请求添加论坛模块 
            $data = $request->post();//获取参数
            $path = $request->file('image')->store('/avatars');
            unset($data['_token']);
            $data['image'] = $path;
            $res = DB::table('model')->insert($data);
            if($res){
                return redirect('/prompt')->with(['message' => 'Added successfully', 'url' => '/model', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'Added failed', 'url' => '/modeladd', 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            return view('model.modeladd');
        }
    }


     /**
     * 修改论坛模块
     *
     */
    public function modeledit(Request $request,$id){
        if ($request->isMethod('post')) { //如果是post请求添加用户 
            $data = $request->post(); //获取参数
            $id = $data['id'];
            unset($data['id'],$data['_token']);
            if(!empty($_FILES['image']['name'])){
                $data['image'] = $request->file('image')->store('/avatars');
            }
            $res = DB::table('model')->where(['id'=>$id])->update($data);
            if($res){
                return redirect('/prompt')->with(['message' => 'Successfully modified', 'url' => '/model', 'jumpTime' => 3, 'status' => false]);
            }else{
                return redirect('/prompt')->with(['message' => 'fail to edit', 'url' => '/modeledit/'.$id, 'jumpTime' => 3, 'status' => false]);
            }
        }else{
            $modelInfo = DB::table('model')->where(['id'=>$id])->first();
            return view('model.modeledit',['info'=>$modelInfo]);
        }
    }




   /**
     * 删除论坛模块
     *
     */
    public function modeldel(Request $request,$id){
        $modelInfo = DB::table('model')->where(['id'=>$id])->delete();
        return redirect('/prompt')->with(['message' => 'delete success', 'url' => '/model', 'jumpTime' => 3, 'status' => false]);
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