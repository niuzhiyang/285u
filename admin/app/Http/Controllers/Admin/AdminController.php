<?php

namespace App\Http\Controllers\admin;
//实例化DB
use DB;
use Illuminate\Support\Facades\Input; 
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

header("content-type:text/html;charset=utf-8");
class AdminController extends BaseController
{	
	//首页显示
	public function index(){
		//
    	return view("admin/index");
	}
	//
	public function buttons(){
		//
    	return view("admin/buttons");
	}
	
	//
	public function calendar(){
		//
    	return view("admin/calendar");
	}
	//
	public function login(){
		// print_r($_POST);
    	return view("admin/login");
	}
	//
	public function editor(){
		//
    	return view("admin/editor");
	}
	//
	public function elements(){
		//
    	// echo 13;
    	return view("admin/elements");
	}
	//
	public function forbidden(){
		//
    	return view("admin/forbidden");
	}
	//
	public function forms(){
		//
    	return view("admin/forms");
	}
	//
	public function internal(){
		//
    	return view("admin/internal");
	}
	//
	public function manageblog(){
		//
    	return view("admin/manageblog");
	}
	//
	public function messages(){
		//
    	return view("admin/messages");
	}
	//
	public function newpost(){
		//
    	return view("admin/newpost");
	}
	//
	public function newsfeed(){
		//
    	return view("admin/newsfeed");
	}
	//
	public function notfound(){
		//
    	return view("admin/notfound");
	}
	//
	public function offline(){
		//
    	return view("admin/offline");
	}
	//
	public function photo(){
		//
    	return view("admin/photo");
	}
	//
	public function productlist(){
		//
    	return view("admin/productlist");
	}
	//
	public function profile(){
		//
    	return view("admin/profile");
	}
	//
	public function reports(){
		//
    	return view("admin/reports");
	}
	//
	public function support(){
		//
    	return view("admin/support");
	}
	//
	public function tables(){
		//
    	return view("admin/tables");
	}
	//
	public function typography(){
		//
    	return view("admin/typography");
	}
	//
	public function widgets(){
		//
    	return view("admin/widgets");
	}
	//
	public function wizard(){
		//
    	return view("admin/wizard");
	}

}
