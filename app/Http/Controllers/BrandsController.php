<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brands;


class BrandsController extends Controller
{
   public function create(Request $req){
    $req->validate([
       'brandname'=>'required',
        'brandtype'=>'required',
        'logofile'=>'required',
        'status'=>'required' 
       ]);

       // capturing request parameters
       $brandname = $req['brandname'];
       $brandtype = $req['brandtype'];
       $logofile = $req['logofile'];
       $status = $req['status'];

        // establisng a connection ... 
        $host=env('LOCALHOST');
        $user=env('LOCALHOST_USER');
        $pass=env('LOCALHOST_PASS');
        $dbname=env('LOCALHOST_DBNAME');

        $conn = mysqli_connect($host,$user,$pass,$dbname);


        // saving record into brands table
        $brand = new Brands;
        $brand->name = $brandname;
        $brand->type = $brandtype;
        $brand->status = $status;

        // logo file saved
        $public_des_path='public/images';
        $fname = $req->file('logofile');
        $brand->logo =  $fname = $req->file('logofile')->store('');
        $req->file('logofile')->storeAs($public_des_path,$fname);
        $req->file('logofile')->move('img/',$fname);

       $brand->save();

       return view('admin/dashboard');
    }

    public function allbrandsrec(){
        $brands = Brands::all();
        return view('admin/allbrands',['brand'=>$brands]);
    }
}
