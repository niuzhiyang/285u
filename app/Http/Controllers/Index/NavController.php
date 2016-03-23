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
class NavController extends BaseController
{
	public function nav(){
		//查询导航栏的信息
		$nav_arr = DB::table("nav")->where("is_show","1")->orderby("short","asc")->get();
		return $nav_arr;
	}
}