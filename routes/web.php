<?php


	#Cms
	
	Route::middleware(['adminguard'])->group(function(){
		 Route::get('cms/dashboard','CmsController@dashboard');
	});
	
	#Pages
	Route::get('/','PagesController@home');
	Route::get('contact','PagesController@contact');
	
	#Shop
	Route::get('shop','ShopController@categories');
	Route::get('shop/order','ShopController@order');
	Route::get('shop/remove-item','ShopController@removeItem');
	Route::get('shop/cart','ShopController@cart');
	Route::get('shop/add-to-cart','ShopController@addToCart');
	Route::get('shop/clear-cart','ShopController@clearCart');
	Route::get('shop/{curl}','ShopController@products');
	Route::get('shop/{curl}/{purl}','ShopController@item');
	
	#User
	Route::get('user/signin','UserController@getSignin');
	Route::post('user/signin','UserController@postSignin');
	Route::get('user/signup','UserController@getSignup');
	Route::post('user/signup','UserController@postSignup');
	Route::get('user/logout','UserController@logOut');
