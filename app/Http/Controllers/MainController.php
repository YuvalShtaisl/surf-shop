<?php
	 
	 namespace App\Http\Controllers;
	 
	 use App\Categorie;
	 use App\Menu;
	
	 class MainController extends Controller
	 {
			function __construct()
			{
				 self::$data['categories'] = Categorie::all()->toArray();
				 self::$data['menu'] = Menu::all()->toArray();
				 
			}
			
			public static $data = ['title' => 'SurfShop | '];
			
			
			
			
	 }
