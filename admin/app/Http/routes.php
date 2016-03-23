<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//后台
	//首页
	Route::get("/","Admin\AdminController@index");
		Route::get("index","Admin\AdminController@index");

	//
	Route::get("buttons","Admin\AdminController@buttons");

	
	//
	Route::get("calendar","Admin\AdminController@calendar");
	
	//
	Route::get("dashboard","Admin\AdminController@dashboard");
	// Route::post("dashboard","Admin\AdminController@dashboard");
	
	//
	Route::get("editor","Admin\AdminController@editor");
	
	//
	Route::get("elements","Admin\AdminController@elements");
	
	//
	Route::get("forbidden","Admin\AdminController@forbidden");
	
	//
	Route::get("forms","Admin\AdminController@forms");
	
	//
	Route::get("internal","Admin\AdminController@internal");
	
	//
	Route::get("manageblog","Admin\AdminController@manageblog");
	
	//
	Route::get("messages","Admin\AdminController@messages");

	//
	Route::get("login","Admin\AdminController@login");
	
	//
	Route::get("newpost","Admin\AdminController@newpost");
	
	//
	Route::get("newsfeed","Admin\AdminController@newsfeed");

	//
	Route::get("notfound","Admin\AdminController@notfound");

	//
	Route::get("offline","Admin\AdminController@offline");

	//
	Route::get("photo","Admin\AdminController@photo");

	//
	Route::get("productlist","Admin\AdminController@productlist");

	//
	Route::get("profile","Admin\AdminController@profile");

	//
	Route::get("reports","Admin\AdminController@reports");

	//
	Route::get("support","Admin\AdminController@support");

	//
	Route::get("tables","Admin\AdminController@tables");

	//
	Route::get("typography","Admin\AdminController@typography");

	//
	Route::get("widgets","Admin\AdminController@widgets");

	//
	Route::get("wizard","Admin\AdminController@wizard");