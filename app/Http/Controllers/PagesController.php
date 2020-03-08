<?php
	 
	 namespace App\Http\Controllers;
	 
	 use App\Categorie;
	 use App\Menu;
	 use App\Product;
	 use function view;
	 
	 class PagesController extends MainController
	 {
			public function home()
			{
				 self::$data['title'] .= 'Home-Page';
				 self::$data['categories'] = Categorie::all();
				 self::$data['products'] = Product::select('products.*',
						 'c.curl')->join('categories as c',
						 'c.id',
						 '=',
						 'products.categorie_id')->limit(8)->orderBy('created_at',
								 'desc')->get();
				 return view('content.home',
						 self::$data);
			}
			
			
			public function contact()
			{
				 self::$data['title'] .= 'contact-us';
				 return view('content.contact',
						 self::$data);
			}
			
			public function about()
			{
				 self::$data['title'] .= 'about-us';
				 return view('content.about',
						 self::$data);
			}
			
			public function dynamicLink($dynamic)
			{
				 $result = Menu::where('url',
						 '=',
						 $dynamic)->with('contents')->get();
				 
				
				if($result->count() && ($contents = $result->first()->contents->first())){
					 
					 $title = $contents->title;
					 $contents = $result->first()->contents;
					 self::$data['contents'] = $contents;
					 self::$data['title'] .= $title;
					 return view('content.dynamic',
							 self::$data);
				}
				else {
					
					  return abort(404);
				
				}
				
			}
	 }
