<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session;
use function serialize;

class Order extends Model
{
	static public function saveNew(){
		 $order = new self();
		 $order->user_id = Session::get('user_id');
		 $order->data = serialize(Cart::getContent()->toArray());
		 $order->total = Cart::getTotal();
		 $order->save();
		 Cart::clear();
		 Session::flush('Your order have saved');
	}
}
