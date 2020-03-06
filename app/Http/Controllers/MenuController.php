<?php
	 
	 namespace App\Http\Controllers;
	 
	 use App\Http\Requests\menuRequest;
	 use App\Menu;
	 use Session;
	 
	 
	 class MenuController extends MainController
	 {
			
			
			public function index()
			{
				 return view('cms.menu', self::$data);
			}
			
			
			public function create()
			{
				 return view('cms.add_menu', self::$data);
			}
			
			
			public function store(MenuRequest $request)
			{
				 Menu::saveNew($request);
				 return redirect('cms/menu');
			}
			
			
			public function show($id)
			{
				 self::$data['item_id'] = $id;
				 return view('cms.delete_menu', self::$data);
			}
			
			
			public function edit($id)
			{
				 self::$data['item'] = Menu::find($id)->toArray();
				 return view('cms.edit_menu', self::$data);
			}
			
			
			public function update(MenuRequest $request, $id)
			{
				 Menu::updateItem($request, $id);
				 return redirect('cms/menu');
			}
			
			
			public function destroy($id)
			{
				 Menu::destroy($id);
				 Session::flash('sm', 'Menu Item Has Been Deleted');
				 return redirect('cms/menu');
				 
			}
	 }
