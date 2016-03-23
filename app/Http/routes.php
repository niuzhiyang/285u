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

/**
* 285U旅游网站开发 
*开发人员：*** *** *** *** 
*
*
*
*
*/

//前台index
	//index首页
	Route::get("/","Index\indexController@index");
		Route::get("index","Index\indexController@index");

	//
	Route::get("car","Index\indexController@car");

	//
	Route::get("dest","Index\indexController@dest");
	
	//
	Route::get("food","Index\indexController@food");
	
	//
	Route::get("house","Index\indexController@house");
	
	//
	Route::get("goods","Index\indexController@goods");
	
	//
	Route::get("jifen","Index\indexController@jifen");
	
	//登录跳转
	Route::get("login","Index\IndexController@login");
	
	//
	Route::get("message","Index\indexController@message");
	
	//
	Route::get("news","Index\indexController@news");
	
	//
	Route::get("travels","Index\indexController@travels");
	
	//
	Route::get("nongye","Index\indexController@nongye");
	
	//
	Route::get("recom","Index\indexController@recom");
	
	//
	Route::get("spot","Index\indexController@spot");
	
	//
	Route::get("reg","Index\indexController@reg");
	Route::post("stat","Index\indexController@stat");
	
