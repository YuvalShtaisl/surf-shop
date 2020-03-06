<?php
	 
	 namespace App;
	 
	 use Cart;
	 use DB;
	 use Illuminate\Database\Eloquent\Model;
	 
	 /**
 * App\Product
 *
 * @property int $id
 * @property int $categorie_id
 * @property string $ptitle
 * @property string $particle
 * @property float $price
 * @property string $pimage
 * @property string $purl
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCategorieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereParticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePurl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
				 $data['product'] = DB::table('products AS p')
						 			->where('purl', '=', $purl)
									->join('categories AS c', 'c.id', '=', 'p.categorie_id')
						      ->select('p.*', 'c.ctitle', 'c.curl')
						 			->first();
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
											['curl' => $product['curl'], 'pimage' => $product['pimage'],'purl' => $product['purl'],]) ? 1 : 0;
							 }
							 return 0;
						}
				 }
			}
			
	 }
