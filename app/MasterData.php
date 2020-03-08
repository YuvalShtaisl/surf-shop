<?php

namespace App;

	class MasterData {
		 
		 function __construct()
		 {
		 	
				self::$data['categories'] = Categorie::all()->toArray();
				self::$data['menu'] = Menu::all()->toArray();
				
				/*$this->dataForView = ['categories' => ];*/
				
		 }
	}
