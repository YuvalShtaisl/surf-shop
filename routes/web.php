<?php


	#Cms
	 

	 
	 Route::middleware(['adminguard'])->group(function(){
		 Route::prefix('cms')->group(function() {
		 	
				Route::get('dashboard','CmsController@dashboard');
				Route::resource('menu','MenuController');
				Route::resource('content','ContentController');
				Route::resource('categories','CategoryController');
				
		 });
	});
		 
	
	
	#Pages
	
	Route::get('/','PagesController@home');
	Route::get('contact','PagesController@contact');
	Route::get('about','PagesController@about');
	
	#Shop
	 
	 Route::prefix('shop')->group(function () {
	 	
			Route::get('/','ShopController@categories');
			Route::get('order','ShopController@order');
			Route::get('remove-item','ShopController@removeItem');
			Route::get('cart','ShopController@cart');
			Route::get('add-to-cart','ShopController@addToCart');
			Route::get('clear-cart','ShopController@clearCart');
			Route::get('{curl}','ShopController@products');
			Route::get('{curl}/{purl}','ShopController@item');
			
	 });
	
	
	#User
	 
	 Route::prefix('user')->group(function () {
	 	
			Route::get('signin','UserController@getSignin');
			Route::post('signin','UserController@postSignin');
			Route::get('signup','UserController@getSignup');
			Route::post('signup','UserController@postSignup');
			Route::get('logout','UserController@logOut');
			
	 });
	
