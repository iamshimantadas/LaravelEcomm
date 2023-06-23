<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\AddcategoryController;
use App\Http\Controllers\updatecategorycontroller;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\subcategoryController;
use App\Http\Controllers\BrandsController;

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
Route::get('/addcategory',function(){
    return view('admin/category');
});
Route::post('/addcategory_data',[AddcategoryController::class,'save']);
// update category [admin]
Route::get('/updatecategory',[updatecategorycontroller::class,'allcategory']);
Route::get('/updatecategoryrec',[updatecategorycontroller::class,'editcategory']);
Route::post('/updatecategory_data',[updatecategorycontroller::class,'updateCategory']);
Route::get('/searchcategory',[SearchController::class,'search']);

Route::get('/sub_category',[subcategoryController::class,'send']);
Route::post('/sub_category_data',[subcategoryController::class,'save']);
Route::get('/updatesub_category',[subcategoryController::class,'allsubcategory']);

Route::get('/addbrand',function(){
    return view('admin/addbrand');
});
Route::post('/addbrandrec',[BrandsController::class,'create']);
Route::get('/admin_allbrands',[BrandsController::class,'allbrandsrec']);
