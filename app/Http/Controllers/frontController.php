<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class frontController extends Controller
{
    public function __construct(){

    }

    public function welcome(){
    	$setups = DB::table('setups')->first();
    	if (!empty($setups)) {
    		$socials = explode(',',$setups->social);
    		$icons = explode(',',$setups->social);
    		foreach ($icons as $icon) {
    			$icon = explode('.', $icon);
    			$icon = $icon[1];
    			$fa[] = $icon;
    		}
    	}else{
    		$socials = [];
    	}

        $cats = DB::table('categories')->where('status','on')->get();
        $home = DB::table('contents')->where('category','home')->first();
        $about = DB::table('contents')->where('category','about us')->first();
    	return view ('welcome',[
    		'setups'    =>  $setups,
    		'socials'   =>  $socials,
        'fa'        =>  $fa,
    		'cats'      =>  $cats,
        'home'      =>  $home,
        'about'     =>  $about,
    	]);
    }
}
