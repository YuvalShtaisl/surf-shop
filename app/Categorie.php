<?php
	 
	 namespace App;
	 
	 use Illuminate\Database\Eloquent\Model;
	 use Session;
	 
	 /**
 * App\Categorie
 *
 * @property int $id
 * @property string $ctitle
 * @property string $carticle
 * @property string $curl
 * @property string $cimage
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCarticle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCimage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereCurl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Categorie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Categorie extends Model
	 {
			static public function saveNew($request)
			{
				 $image_name = 'noimage.jpeg';
				 
				 if($request->hasFile('cimage') && $request->file('cimage')->isValid()) {
					
				 	 $file = $request->file('cimage');
				 	 
				 	 $image_name = data('Y.m.d.H.i.s') .'-'. $file->getClientOriginalName();
				 	 
				 	 $request->file('cimage')->move(public_path() . '/img', $image_name);
						
				 }
				 
				 $category = new self();
				 $category->ctitle = $request['ctitle'];
				 $category->carticle = $request['carticle'];
				 $category->curl = $request['curl'];
				 $category->cimage = $image_name;
				 $category->save();
				 Session::flash('sm','New Category Saved');
			}
	 }
