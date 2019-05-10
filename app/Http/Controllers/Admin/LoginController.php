<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LoginController extends Controller
{
   public function index(){
   $db=DB::table('think_member');
   	//查询全部的 数据
   	$data=$db->get();

   	//循环所有的数据
   	foreach ($data as $key => $value) {
   		echo "id 是：{$value->id}";
   	}
   }

//这是直接到views根目录下的视图
   public function login(){
   	return view('login');
   }

   
 //这是到views目录下的home分目录下的视图并且进行参数传递
   public function user(){
   	    $name='张三';
   	    $age='23';
   		//return view('home.user',['name'=>$name,'age'=>$age]);
   		return view('home.user',compact('name','age'));
   }


}
