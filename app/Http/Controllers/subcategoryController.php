<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Sub_category;


class subcategoryController extends Controller
{
    public function send(){
        $data = DB::table('category')->get();
        return view('admin/sub_category',['cat'=>$data]);
    }
    public function save(Request $request){
        $request->validate([
            'subcategory_name' => 'required',
            'category_id' => 'required',
            'category_descrp' => 'required',
            'category_status' => 'required',
            'category_img_file' => 'required'
        ]);

        $subcategory_name = $request['subcategory_name'];
        $category_id = $request['category_id'];
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
        $subcategory_name=mysqli_real_escape_string($conn,$subcategory_name);
        $category_id=mysqli_real_escape_string($conn,$category_id);
        $category_descrp=mysqli_real_escape_string($conn,$category_descrp);
        $category_status=mysqli_real_escape_string($conn,$category_status);
        $category_img_file=mysqli_real_escape_string($conn,$category_img_file);
        
        $subcategory_name=htmlspecialchars($subcategory_name);
        $category_id=htmlspecialchars($category_id);
        $category_descrp=htmlspecialchars($category_descrp);
        $category_status=htmlspecialchars($category_status);
        $category_img_file=htmlspecialchars($category_img_file);
        

        // updating record 
        $rec  = new Sub_category;
        $rec->subname = $subcategory_name;
        $rec->categoryid = $category_id;
        $rec->descp = $category_descrp;
        $rec->status = $category_status;

        // saving image file
        $public_des_path='public/images';
        $fname = $request->file('category_img_file');
        $rec->sub_cat_image =  $fname = $request->file('category_img_file')->store('');
        $request->file('category_img_file')->storeAs($public_des_path,$fname);
        $request->file('category_img_file')->move('img/',$fname);

        
        $rec->save();

        return redirect('admindashboard');
    }
    public function allsubcategory(){
        $subcat = DB::table('sub_category')
        ->join('category', 'sub_category.categoryid', '=', 'category.id')
        ->get();
        return view('admin/subupdatecategorypage',['subcat'=>$subcat]);
    }
}
