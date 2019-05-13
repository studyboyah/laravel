<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Input;

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


   //模板中使用函数
   public function make(){
   	$db=DB::table('think_member');
   	$data=$db->get();
    $time=time();
   	return view('home.make',compact('data','time'));
   }
   

   //自动验证
   public function verification(Request $request){    

      //判断请求的类型
      if (request()->method()=='POST') {
         //文件上传
              $file=$request->file('photo');
                  dd($file);
              $file=$request->photo;

         //自动验证
         $this->validate($request,[
          //具体的规则
          //字段=》验证规则1|验证规则2|。。。
          //如果验证不同会重定向到发送请求页面（302）
            'name'=>'required|min:2|max:255',
            'age'=>'required|integer|min:1|max:100',
            'email'=>'required|email' 
         ]);
         dd(2);
      }else{

         //展示视图
         return view('home.verification');
      }
   }

}
