<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AddcategoryController extends Controller
{
    public function save(Request $request){
        $request->validate([
            'category_name' => 'required',
            'category_descrp' => 'required',
            'category_status' => 'required',
            'category_img_file' => 'required'
        ]);

        // echo "<pre>";
        // return $request->all();

        $category_name = $request['category_name'];
        $category_descrp = $request['category_descrp'];
        $category_status = $request['category_status'];
        $category_img_file = $request['category_img_file'];

        // establisng a connection ... 
        $host=env('LOCALHOST');
        $user=env('LOCALHOST_USER');
        $pass=env('LOCALHOST_PASS');
        $dbname=env('LOCALHOST_DBNAME');

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        // filter inputs
        $category_name=mysqli_real_escape_string($conn,$category_name);
        $category_descrp=mysqli_real_escape_string($conn,$category_descrp);
        $category_status=mysqli_real_escape_string($conn,$category_status);
        $category_img_file=mysqli_real_escape_string($conn,$category_img_file);
        
        $category_name=htmlspecialchars($category_name);
        $category_descrp=htmlspecialchars($category_descrp);
        $category_status=htmlspecialchars($category_status);
        $category_img_file=htmlspecialchars($category_img_file);
        

        // updating record 
        $rec  = new Category;
        $rec->name = $category_name;
        $rec->description = $category_descrp;
        $rec->status = $category_status;

        // saving image file
        $public_des_path='public/images';
        $fname = $request->file('category_img_file');
        $rec->image =  $fname = $request->file('category_img_file')->store('');
        $request->file('category_img_file')->storeAs($public_des_path,$fname);
        $request->file('category_img_file')->move('img/',$fname);

        
        $rec->save();

        return redirect('admindashboard');
        
    }
}
