<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\nguyenvanan;
//method http
// get , post, put, pacth, delete
//base url: [http://127.0.0.1:8000]
Route::get('/test',function() {
    echo 'hello';
});
Route::get('/',function() {
    echo 'trang chủ';
});
//list-product
Route::get('list-product',[ProductController::class,'showProduct']);

// slug vs params
// http://127.0.0.1:8000/list-product/1/iphone (slug)
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);



// http://127.0.0.1:8000/list-product?id=1&name=iphone (params)
Route::get('update-product',[ProductController::class, 'updateProduct']);
Route::get('thong-tin-sv',[nguyenvanan::class,'showthongtin']);