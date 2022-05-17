<?php

namespace App\Http\Controllers;
use App\Models\catagory;
use Illuminate\Http\Request;

class catagoryController extends Controller
{
    //
    public function register()
    {
    return view('catagory.register');
    }
      function store(Request $request)
      
      {
        $catagory=new catagory();
        $catagory->name = $request->name;
       $is_saved = $catagory->save();
      if($is_saved){
      echo " MY DATA IS SAVED SUCCESFULLLY.";
                 }
      else{
       echo "Sorry, try again something went wrong.";
         }
  
         
      }
      public function get_all()
{
 $catagory= catagory::all();
 return view('catagory.get_all', compact('catagory'));
}
public function get_by_id($id)
 {
  $catagory= catagory::where('id', $id)->first();
  return view('catagory.get_by_id', compact('catagory'));
  }
}
