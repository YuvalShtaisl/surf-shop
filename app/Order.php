<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cart, Session;
use function serialize;

/**
 * App\Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $data
 * @property float $total
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Order whereUserId($value)
 * @mixin \Eloquent
 */
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
