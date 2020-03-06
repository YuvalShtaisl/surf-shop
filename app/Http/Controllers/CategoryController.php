<?php
	 
	 namespace App\Http\Controllers;
	 
	 use Illuminate\Http\Request;
	 use App\Http\Requests\CategoryRequest;
	 use App\Categorie;
	 use Session;
	 
	 
	 class CategoryController extends MainController
	 {
			public function index()
			{
				 self::$data['categories'] = Categorie::all()->toArray();
				 return view('cms.categories', self::$data);
			}
			
			
			public function create()
			{
				 return view('cms.add_category',
						 self::$data);
			}
			
			
			public function store(CategoryRequest $request)
			{
				 Categorie::saveNew($request);
				 return redirect('cms/categories');
			}
			
			
			public function show($id)
			{
				 self::$data['item_id'] = $id;
				 return view('cms.delete_menu',
						 self::$data);
			}
			
			
			public function edit($id)
			{
				 self::$data['item'] = Categorie::find($id)->toArray();
				 return view('cms.edit_category',
						 self::$data);
			}
			
			
			public function update(CategoryRequest $request, $id)
			{
				 Categorie::updateItem($request,
						 $id);
				 return redirect('cms/categories');
			}
			
			
			public function destroy($id)
			{
				 Categorie::destroy($id);
				 Session::flash('sm',
						 'Categorie Item Has Been Deleted');
				 return redirect('cms/categories');
				 
			}
	 }
