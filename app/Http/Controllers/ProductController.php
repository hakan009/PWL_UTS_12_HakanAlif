<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tampil(){
        //$data_product = product::all();
        //return view ('Praktikum.product',compact('data_product'));
        //$product = product::getAllProduct();
        return view ('Praktikum.product',['product' => product::tampil()]);
    }
}
