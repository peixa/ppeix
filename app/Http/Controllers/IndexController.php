<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Models\User;

class indexController extends Controller
{


    //未登录页
    public function notem(){

    }




    /**
     * 首页展示
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        if(!session('h_id')){ //如果未登录
            return view('index.notem');
        }
        
        $modellist =  DB::table('model')->get(); //模块类型
        return view('index.index', ['modellist' => $modellist]);
    }


    /**
     * 用户登录
     * **/
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post(); //获取参数
            $Info = DB::table('user')->where(['phone' => $data['phone'], 'password' => $data['password']])->first();
            if ($Info) { //账号密码正确
                session(['h_id' => $Info->id]); //存储登录状态
                session(['name' => $Info->name]);
                return redirect('/prompt')->with(['message' => 'success', 'url' => '/', 'jumpTime' => 3, 'status' => false]);
            } else {
                return redirect('/prompt')->with(['message' => 'Incorrect username or password', 'url' => '/login', 'jumpTime' => 3, 'status' => false]);
            }
        } else {
            return view('index.login');
        }
    }

    /**
     * 用户注册
     * **/
    public function zhuce(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post(); //获取参数
            $info = DB::table('user')->where(['name' => $data['name']])->first();
            if ($info) {
                return redirect('/prompt')->with(['message' => 'Account exists', 'url' => '/zhuce', 'jumpTime' => 3, 'status' => false]);
            }
            $res = DB::table('user')->insert(['phone' => $data['phone'], 'name' => $data['name'], 'password' => $data['password'], 'sex' => $data['sex']]);
            if ($res) {
                return redirect('/prompt')->with(['message' => 'registration success', 'url' => '/', 'jumpTime' => 3, 'status' => false]);
            } else {
                return redirect('/prompt')->with(['message' => 'registration fail', 'url' => '/zhuce', 'jumpTime' => 3, 'status' => false]);
            }
        } else {
            return view('index.zhuce');
        }
    }


    /**
     * 
     * 论坛列表
     * 
     * **/
    public function list(Request $request, $list_id)
    {
        $info = DB::table('model')->where(['id' => $list_id])->first();
        $list = DB::table('latestnews')->where(['tag' => $list_id])->orderBy('id', 'desc')->get();
        return view('index.list', ['list' => $list, 'info' => $info]);
    }

    /**
     * 
     * 搜索页面
     * 
     * **/
    public function searchlist(Request $request)
    {
        $data = $request->post(); //获取参数
        $list = DB::table('latestnews')->where('title', 'like', '%' . $data['search'] . '%')->orderBy('id', 'desc')->get();
        return view('index.searchlist', ['list' => $list]);
    }




    //用户发帖
    public function addmodel(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->post(); //获取参数
            $data['createtime'] = date('Y-m-d H:i:s', time());
            $data['user_id'] = session('h_id');
            unset($data['_token']);
            $res = DB::table('latestnews')->insert($data);
            if ($res) {
                return redirect('/prompt')->with(['message' => 'Published successfully', 'url' => '/list/' . $data['tag'], 'jumpTime' => 3, 'status' => false]);
            } else {
                return redirect('/prompt')->with(['message' => 'Publishing failed', 'url' => '/addmodel', 'jumpTime' => 3, 'status' => false]);
            }
        } else {
            $iconlist = DB::table('model')->get();
            return view('index.addmodel', ['iconlist' => $iconlist]);
        }
    }

    //论坛详情
    public function content(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $post = $request->post(); //获取参数
            if (empty(session('h_id'))) {
                return redirect('/prompt')->with(['message' => 'You can leave a message after logging in', 'url' => '/content/id' . $post['id'], 'jumpTime' => 3, 'status' => false]);
            }
            $data = [
                'news_id' => $post['id'],
                'user_id' => session('h_id'),
                'content' => $post['content'],
                'createtime' => date('Y-m-d H:i:s', time())
            ];
            $res = DB::table('link')->insert($data);
            if ($res) {
                return redirect('/prompt')->with(['message' => 'Message successfully', 'url' => '/content/' . $post['id'], 'jumpTime' => 3, 'status' => false]);
            } else {
                return redirect('/prompt')->with(['message' => '；Failed to leave message', 'url' => '/content/' . $post['id'], 'jumpTime' => 3, 'status' => false]);
            }
        } else {
            $content = DB::table('latestnews')->where(['id' => $id])->first();
            $info    = DB::table('model')->where(['id' => $content->tag])->first();
            $ly      = DB::table('link')->where(['news_id' => $id])->get();
            foreach ($ly as &$v) {
                $v->name = DB::table('user')->where(['id' => $v->user_id])->first();
            }
            return view('index.content', ['content' => $content, 'info' => $info, 'ly' => $ly]);
        }
    }

    //页面一
    public function news1()
    {
        return view('index.newsone');
    }
    //页面二
    public function news2()
    {
        return view('index.newstow');
    }



    //用户退出登录
    public function hlogout()
    {
        session(['h_id' => NULL]); //清空登录状态
        session(['name' => NULL]); //清空登录状态
        return redirect('/prompt')->with(['message' => 'Log out successfully', 'url' => '/', 'jumpTime' => 3, 'status' => false]);
    }

    //跳转提示
    public function prompt()
    {
        //验证参数
        if (!empty(session('message')) && !empty(session('url')) && !empty(session('jumpTime'))) {
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
        return view('admin.prompt', ['data' => $data]);
    }

    public function paladin()
    {
        return view('jobguide.paladin');
    }

    //关于我们
    public function about(){
        return view('index.about');
    }



}
