<?php
	 
	 namespace App;
	 
	 use Illuminate\Database\Eloquent\Model;
	 use Session;
	 
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
