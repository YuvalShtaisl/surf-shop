<?php

namespace App\Http\Controllers;

class CmsController extends MainController
{
    public function dashBoard(){
    	return view('cms.dashboard',self::$data);
		}
}
