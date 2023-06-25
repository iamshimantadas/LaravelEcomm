<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Products;

class HomePageController extends Controller
{
   public function show(){
    $cat = Category::all();
    $product = Products::all();
    return view('home',['cat' => $cat,'product' => $product]);
   }
}
