<?php

namespace App\Http\Controllers\index;
//实例化DB
use DB;
use Illuminate\Support\Facades\Input; 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

header("content-type:text/html;charset=utf-8");
class IndexController extends NavController
{	
	//首页
	public function index(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/index",["nav_arr"=>$nav_arr]);
	}
	//
	public function car(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/car",["nav_arr"=>$nav_arr]);
	}
	
	//
	public function dest(){
		//获取导航信息
		$nav_arr = $this->nav();

    	return view("index/dest",["nav_arr"=>$nav_arr]);
	}
	//
	public function goods(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/goods",["nav_arr"=>$nav_arr]);
	}
	//
	public function jifen(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/jifen",["nav_arr"=>$nav_arr]);
	}
	//
	public function login(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/login",["nav_arr"=>$nav_arr]);
	}
	//
	public function message(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/message",["nav_arr"=>$nav_arr]);
	}
	//
	public function travels(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/travels",["nav_arr"=>$nav_arr]);
	}
	//
	public function news(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/news",["nav_arr"=>$nav_arr]);
	}
	//
	public function nongye(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/nongye",["nav_arr"=>$nav_arr]);
	}
	//
	public function recom(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/recom",["nav_arr"=>$nav_arr]);
	}
	//
	public function house(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/house",["nav_arr"=>$nav_arr]);
	}
	//
	public function spot(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/spot",["nav_arr"=>$nav_arr]);
	}
	//
	public function food(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/food",["nav_arr"=>$nav_arr]);
	}
	//
	public function reg(){
		//获取导航信息
		$nav_arr = $this->nav();
    	return view("index/reg",["nav_arr"=>$nav_arr]);
	}
	public function stat(){

	echo '测试用数据';
	}
}
