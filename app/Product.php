<?php
	 
	 namespace App;
	 
	 use Cart;
	 use DB;
	 use Illuminate\Database\Eloquent\Model;
	 
	 class Product extends Model
	 {
			static public function getProducts($curl, &$data)
			{
				 $products = DB::table('products AS p')->join('categories AS c',
						 'c.id',
						 '=',
						 'p.categorie_id')->where('c.curl',
						 '=',
						 $curl)->select('p.*',
						 'c.ctitle',
						 'c.curl')->get();
				 $data['products'] = $products->toArray();
				 if($data['products']) $data['title'] .= $data['products'][0]->ctitle . 'products';
			}
			
			static public function getItem($purl, &$data)
			{
				 $data['product'] = DB::table('products')->where('purl',
						 '=',
						 $purl)->first();
			}
			
			static public function addToCart($pid)
			{
				 if(!empty($pid) && is_numeric($pid)) {
						$product = self::from('products as p')->where('p.id',
								$pid)->join('categories as c',
								'c.id',
								'=',
								'p.categorie_id')->select('p.*',
								'c.curl')->first();
						if($product) {
							 $product = $product->toArray();
							 if(!Cart::get($pid)) {
									return Cart::add($pid,
											$product['ptitle'],
											$product['price'],
											1,
											['curl' => $product['curl'], 'pimage' => $product['pimage']]) ? 1 : 0;
							 }
							 return 0;
						}
				 }
			}
			
	 }
