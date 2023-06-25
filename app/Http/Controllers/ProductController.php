<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\Brands;
use App\Models\Products;

class ProductController extends Controller
{
    public function show(){
       $cat =  Category::all();
       $subcat = Sub_category::all();
       $brand = Brands::all();
       return view('admin/addnewproduct',['cat'=>$cat,'subcat'=>$subcat,'brand'=>$brand]);
    }

    public function save(Request $req){
        $req->validate([
            'productName'=>'required',
            'productdescp'=> 'required',
            'thumbimg' => 'required',
            'mrp' => 'required',
            'discount_price'=>'required',
            'quantity'=>'required',
            'category_id'=>'required',
            'subcategory_id'=>'required',
            'brandid'=>'required',
            'status'=>'required'
        ]);

        // echo "<pre>";
        // return $req->all();
        // // getting request parameters
        $productName = $req['productName'];
        $productdescp = $req['productdescp'];
        $thumbimg = $req['thumbimg'];
        $mrp = $req['mrp'];
        $discount_price = $req['discount_price'];
        $quantity = $req['quantity'];
        $category_id = $req['category_id'];
        $subcategory_id = $req['subcategory_id'];
        $brandid = $req['brandid'];
        $status = $req['status'];

        // establisng a connection ... 
        $host=env('LOCALHOST');
        $user=env('LOCALHOST_USER');
        $pass=env('LOCALHOST_PASS');
        $dbname=env('LOCALHOST_DBNAME');

        $conn = mysqli_connect($host,$user,$pass,$dbname);


        // saving record
        $product = new Products;
        $product->title	= $productName;
        $product->descp = $productdescp;
        $product->mrp	= $mrp;
        $product->discount_price = $discount_price;
        $product->quantity = $quantity;
        $product->category_id = $category_id;
        $product->sub_category_id = $subcategory_id;
        $product->brand = $brandid;
        $product->status = $status;	

        // saving image file
        $public_des_path='public/images';
        $fname = $req->file('thumbimg');
        $product->thumbimg =  $fname = $req->file('thumbimg')->store('');
        $req->file('thumbimg')->storeAs($public_des_path,$fname);
        $req->file('thumbimg')->move('img/',$fname);

        $product->save();

        return redirect('admindashboard');
    }
}
