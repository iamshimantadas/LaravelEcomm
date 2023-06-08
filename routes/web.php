<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;

// admin routes
Route::get('/admin', function () {
    if(Session::get('adminMail')){
        return redirect('admindashboard');
    }else{
        return view('admin/login');
    }
});
Route::post('/adminlogin',[admincontroller::class,'auth']);
Route::get('/admindashboard',function(){
    if(Session::get('adminMail')){
        return view('admin/dashboard');
    }else{
        return view('admin/login');
    }
});