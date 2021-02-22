<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use APP\CrudTable;
use APP\Test;

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
	    ]);
	    Test::create($requeststa->all());
   		$success="Store Successfully";            
        return back()->with('success',$success);exit;

	   	$requ 			= new Test; 
   		print"<pre>"; print_r($validated);exit;
   		$requ->email 	= $requeststa->email;
   		$requ->pwd 		= $requeststa->pwd;
   		$requ->remember = $requeststa->remember	;
   		$requ->save(); 
   		 
   }


}
