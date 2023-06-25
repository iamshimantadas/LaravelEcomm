<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkoutController extends Controller
{
    public function bill(Request $req){
       $productid = $req['productid'];
       $quantity = $req['quantity'];
       $productname = $req['productname'];
       $price = $req['price'];

       return view('checkout',['id'=>$productid,
        'quantity'=>$quantity,'productName'=>$productname,
        'price'=>$price
    ]);

    
    }
}
