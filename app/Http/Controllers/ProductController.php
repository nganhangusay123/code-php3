<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        $products = [
            [
                'id' => '1',
                'name' => 'iphone14'
            ],
            [
                'id' => '2',
                'name' => 'iphone16'
            ]
        ];
        return view('list-product')->with([
            'products'=>$products
        ]);
    }
    public function getProduct($id){
        echo $id;
    }
    public function updateProduct(Request $request){
        echo $request->id;
    }
}
