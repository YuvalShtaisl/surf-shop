<?php
	 
	 namespace App;
	 
	 use Illuminate\Database\Eloquent\Model;
	 
	 /**
		* App\Menu
		*
		* @property int $id
		* @property string $link
		* @property string $url
		* @property string $mtitle
		* @property \Illuminate\Support\Carbon $updated_at
		* @property \Illuminate\Support\Carbon $created_at
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu newModelQuery()
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu newQuery()
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu query()
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereCreatedAt($value)
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereId($value)
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereLink($value)
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereMtitle($value)
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereUpdatedAt($value)
		* @method static \Illuminate\Database\Eloquent\Builder|\App\Menu whereUrl($value)
		* @mixin \Eloquent
		*/
	 class Menu extends Model
	 {
			static public function saveNew($request)
			{
				 
				 $menu = new self();
				 $menu->link = $request['link'];
				 $menu->url = $request['url'];
				 $menu->mtitle = $request['mtitle'];
				 $menu->save();
			}
			
			static public function updateItem($request, $id)
			{
				 $menu = self::find($id);
				 $menu->link = $request['link'];
				 $menu->url = $request['url'];
				 $menu->mtitle = $request['mtitle'];
				 $menu->save();
			}
			
			public function contents()
			{
				 return $this->hasMany(Content::class);
				 
			}
	 }
