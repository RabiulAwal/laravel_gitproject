<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class TestController extends Controller
{
   public function abc()
   {
   		return view('form');
   }

   public function store(Request $requeststa)
   {
	   	$validated = $requeststa->validate([
	        'email' => 'required|string|email|unique:users,email',
	        'pwd' => 'required',
	        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	    ]);
        //print"<pre>"; print_r($validated);exit; 

	   	$requ 			= new Test; 
   		$requ->email 	= $requeststa->email;
   		$requ->pwd 		= $requeststa->pwd;
   		if($requeststa->remember)
   		{
   			$requ->remember = $requeststa->remember;
   		}

   		// Upload Image
   		$imageName = time().'.'.$requeststa->image->extension();  
        $requeststa->image->move(public_path('images'), $imageName);
        $requ->image = $imageName;  

   		$requ->save(); 
        return redirect('showData');
   		$success = "Store Successfully";           
        return back()->with('success',$success);

   }


   public function show()
   {
      $getAllData = Test::OrderBy('id','desc')->get(); 
      return view('show_result')->with('getdata',$getAllData); 
      //print"<pre>"; print_r($getAllData);exit;
   }

   public function edit($id)
   {
      $getData = Test::where('id',$id)->get();
      return view('modify_data')->with('getdata', $getData);
      //print"<pre>"; print_r($getData);exit;
   }


}
