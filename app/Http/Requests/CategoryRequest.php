<?php
	 
	 namespace App\Http\Requests;
	
	 use Illuminate\Foundation\Http\FormRequest;
	 use Illuminate\http\Request;
	
	 
	 
	 class CategoryRequest extends FormRequest
	 {
			
			public function authorize()
			{
				 return true;
			}
			
			
			public function rules(Request $request)
			{
				 $item_id = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
				 
				 
				 return [
				 		
				 		 'ctitle' => 'required',
						 'curl' => 'required|regex:/^[a-z\d]+(-[a-z\d]+)*$/|unique:categories,curl'. $item_id,
						 'carticle' => 'required',
						 'cimage' => 'image',
						 
				 ];
			}
	 }
