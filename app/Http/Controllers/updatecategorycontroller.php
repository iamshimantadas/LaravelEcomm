<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class updatecategorycontroller extends Controller
{
    public function allcategory(){
        $cat = Category::all();
        return view('admin/updatecategorypage',['cat'=>$cat]);
    }
    public function editcategory(Request $req){
        $req->validate([ 'categoryid'=>'required' ]);
        
         $categoryid = $req['categoryid'];

         $cat = DB::table('category')->get()->where('id',$categoryid);
         
         return view('admin/category_update',['cat'=>$cat]);
    }

    public function updateCategory(Request $request){
        $request->validate([
            'category_id'=>'required',
            'category_name' => 'required',
            'category_descrp' => 'required',
            'category_status' => 'required',
            'category_img_file' => 'required'
        ]);

        $category_id = $request['category_id'];
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
        $category_id=mysqli_real_escape_string($conn,$category_id);
        $category_name=mysqli_real_escape_string($conn,$category_name);
        $category_descrp=mysqli_real_escape_string($conn,$category_descrp);
        $category_status=mysqli_real_escape_string($conn,$category_status);
        $category_img_file=mysqli_real_escape_string($conn,$category_img_file);
        
        $category_id=htmlspecialchars($category_id);
        $category_name=htmlspecialchars($category_name);
        $category_descrp=htmlspecialchars($category_descrp);
        $category_status=htmlspecialchars($category_status);
        $category_img_file=htmlspecialchars($category_img_file);
        
        // saving image file
        $public_des_path='public/images';
        $fname = $request->file('category_img_file');
        $imgname =  $fname = $request->file('category_img_file')->store('');
        $request->file('category_img_file')->storeAs($public_des_path,$fname);
        $request->file('category_img_file')->move('img/',$fname);

        // update category
        DB::table('category')
        ->where('id', $category_id)
        ->update(array('name' => $category_name,'description' => $category_descrp,'image'=>$imgname,'status'=>$category_status));

        return redirect('admindashboard');
    }
}
