<?php

namespace App\Http\Controllers;
use App\Http\Models;

use Illuminate\Http\Request;

class product extends Controller

{
    public function register(){
        return view(product.register);
    }
    public function store(request $request){
        $product=new product();
        $product->name=$request->name;
        $product->unit=$request->unit;
        $product-> price=$request-> price;
        $product-> quantity=$request-> quantity;
$is_successed=$product::save();
if(is_successed)
echo"recurd saved successesfully";
else
echo"something event wrong try again";


    }
}