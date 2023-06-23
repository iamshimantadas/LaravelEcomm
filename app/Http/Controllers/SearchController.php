<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    public function search(Request $req){
       $req->validate([ 'searchProductName' => 'required']);

       $searchProductName = $req['searchProductName'];

       $data = DB::table('category')
                ->where('name', 'like', '%'.$searchProductName.'%')
                ->get();
      
       return view('admin/updatecategorypage',['cat'=>$data]);         
    }
}
