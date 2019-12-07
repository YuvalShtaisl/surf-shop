<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CmsController extends MainController
{
    public function dashBoard(){
    	return view('cms/cms_master',self::$data);
		}
}
