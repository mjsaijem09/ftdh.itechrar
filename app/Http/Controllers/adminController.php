<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotation;
use DB;
use Session;

class adminController extends Controller {

    public function __construct(){

    }

    public function admin(){
    	return view ('backend.index');
    }

    public function setups(){
    	$data = DB::table('setups')->first();
    	if (!empty($data)) {
            $socials = explode(',',$data -> social);
        }else{
            $socials = [];
        }
        return view ('backend.insert.setup',['data' => $data,'socials' => $socials]);
    }

    public function categories(){
        $data = DB::table('categories')->get();
        return view ('backend.insert.category', ['data'=>$data]);
    }

    public function deleteCategory($id){
        $data = DB::table('categories')->where('id', $id)->delete();
        return redirect()->back()->with('Category successfully deleted!');
    }

    public function editCategory($id){
        $data = DB::table('categories')->get();
        $maindata = DB::table('categories')->where('id', $id)->first();
        if($maindata){
            return view('backend.edit.category', ['data'=>$data, 'maindata'=>$maindata]);
        }else{
            return redirect('categories');
        }
    }

    public function newPost(){
        $cats = DB::table('categories')->where('status','on')->get();
        return view('backend.insert.newpost',['cats'=>$cats]);
    }
}
