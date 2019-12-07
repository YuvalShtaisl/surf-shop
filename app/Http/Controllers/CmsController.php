<?php

namespace App\Http\Controllers;

class CmsController extends MainController
{
    public function dashBoard(){
    	return view('cms/cms_master',self::$data);
		}
}
