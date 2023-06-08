<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class admincontroller extends Controller
{
   public function auth(Request $req){
    $req->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // establishing database connection
    $host = env('LOCALHOST');
    $username = env('LOCALHOST_USER');
    $password = env('LOCALHOST_PASS');
    $dbname = env('LOCALHOST_DBNAME'); 
    $conn = mysqli_connect($host,$username,$password,$dbname);

    $uemail = $req['email'];
    $upass = $req['password'];

    // filter admin inputs
    $uemail = htmlspecialchars($uemail);
    $upass = htmlspecialchars($upass);
    $uemail = mysqli_real_escape_string($conn,$uemail);
    $upass = mysqli_real_escape_string($conn,$upass);
    
    $sql = "SELECT * FROM admin WHERE email='$uemail' AND password='$upass'";
    $query = mysqli_query($conn,$sql);
    $val = mysqli_num_rows($query);
    if($val == 1){
        Session::put('adminMail', $uemail);
        return redirect('admindashboard');
    }else{
        return view('admin/login');
    }
   }
}
