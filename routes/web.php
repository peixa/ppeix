<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LatestnewsController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\IndexController;


Route::any('/prompt',[AdminController::class,'prompt']);//跳转提示

Route::any('/index',[AdminController::class,'index']);//后台首页
Route::any('/logout',[AdminController::class,'logout']);//退出登录

Route::any('/admin',[AdminController::class,'login']);//管理员登录
Route::any('/user',[AdminController::class,'user']);//用户列表
Route::any('/useradd',[AdminController::class,'useradd']);//添加用户
Route::any('/useredit/{id}',[AdminController::class,'useredit']);//修改用户
Route::any('/userdel/{id}',[AdminController::class,'userdel']);//删除用户
Route::any('/userorder',[AdminController::class,'userorder']);//用户订单

Route::any('/model',[ModelController::class,'model']);//帖子模块列表
Route::any('/modeladd',[ModelController::class,'modeladd']);//添加帖子模块
Route::any('/modeledit/{id}',[ModelController::class,'modeledit']);//修改帖子模块
Route::any('/modeldel/{id}',[ModelController::class,'modeldel']);//删除帖子模块

Route::any('/latestnews',[LatestnewsController::class,'latestnews']);//最新新闻列表
Route::any('/latestnewsadd',[LatestnewsController::class,'latestnewsadd']);//添加最新新闻
Route::any('/latestnewsedit/{id}',[LatestnewsController::class,'latestnewsedit']);//修改最新新闻
Route::any('/latestnewsdel/{id}',[LatestnewsController::class,'latestnewsdel']);//删除最新新闻

Route::any('/',[IndexController::class,'index']);//项目首页
Route::any('/login',[IndexController::class,'login']);//用户登录
Route::any('/zhuce',[IndexController::class,'zhuce']);//用户注册   
Route::any('/list/{id}',[IndexController::class,'list']);//论坛列表
Route::any('/addmodel',[IndexController::class,'addmodel']);//发布帖子
Route::any('/content/{id}',[IndexController::class,'content']);//帖子详情             
Route::any('/hlogout',[IndexController::class,'hlogout']);//用户退出登录
Route::any('/searchlist',[IndexController::class,'searchlist']);//论坛列表搜索
Route::any('/news1',[IndexController::class,'news1']);//页面一
Route::any('/news2',[IndexController::class,'news2']);//页面二
Route::any('/about',[IndexController::class,'about']);//关于我们

Route::any('/paladin',[IndexController::class,'paladin'])->name('paladin');//notworking