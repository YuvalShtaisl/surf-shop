<?php
	 
	 namespace App\Http\Controllers;
	 
	 use App\categorie;
	 use App\Order;
	 use App\Product;
	 use Cart;
	 use DB;
	 use Illuminate\Http\Request;
	 use Session;
	 use function redirect;
	 
	 
	 class ShopController extends MainController
	 {
			public function categories()
			{
				 
				 self::$data['title'] .= 'Shop Categories';
				 
				 return view('content.categories',
						 self::$data);
			}
			
			public function products($curl)
			{
				 Product::getProducts($curl,
						 self::$data);
				 return view('content.products',
						 self::$data);
			}
			
			public function item($curl, $purl)
			{
				 Product::getItem($purl,
						 self::$data);
				 if(!empty(self::$data['product']->ptitle)) {
						self::$data['title'] .= self::$data['product']->ptitle;
				 }
				 return view('content.item',
						 self::$data);
			}
			
			public function addToCart(Request $request)
			{
				 
				 return Product::addToCart($request['pid']);
			}
			
			public function clearCart()
			{
				 Cart::clear();
				 return redirect()->back();
			}
			
			public function cart()
			{
				 $cartCollection = Cart::getContent();
				 $cart = $cartCollection->toArray();
				 self::$data['cart'] = $cart;
				 self::$data['title'] .= 'cart page';
				 return view('content.cart',
						 self::$data);
			}
			
			public function removeItem(Request $request)
			{
				 if(!empty($request['id']) && is_numeric($request['id'])) {
						Cart::remove($request['id']);
				 }
				 return redirect('shop/cart');
			}
			
			public function order()
			{
				 if(Cart::isEmpty()) {
						return redirect('shop');
				 } else {
						if(!Session::has('user_id')) {
							 return redirect('user/signin?rt=shop/cart');
						} else {
							 Order::saveNew();
							 return redirect('shop');
						}
				 }
			}
	 }
	
	
