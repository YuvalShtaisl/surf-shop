<?php
	
	namespace App\Http\Controllers;
	
	use App\Categorie;
	use App\Product;
	
	class PagesController extends MainController
	{
		public function home()
		{
			self::$data['title'] .= 'Home-Page';
			self::$data['categories'] = Categorie::all();
			self::$data['products'] = Product::limit(6)->orderBy('created_at','desc')->get();
			return view('content.home',
				self::$data);
		}
		
		
		public function contact()
		{
			self::$data['title'] .= 'contact-us';
			return view('content.contact',
				self::$data);
		}
	}
