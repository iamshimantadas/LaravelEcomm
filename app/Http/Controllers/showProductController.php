<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class showProductController extends Controller
{
    public function show(Request $req){
        $productid = $req['productid'];

        $product = DB::table('products')
        ->where('id', '=', $productid)
        ->get();

        $brand = DB::table('products')
        ->join('brands', 'products.brand', '=', 'brands.id')
        ->get();

        return view('product',['product'=>$product,'brand'=>$brand]);
    }

}
