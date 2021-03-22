<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Home;

class Corona extends Controller
{
    public function about(){
    	return view('about');
    }
    public function prevention(){
    	return view('prevention');
    }
    public function faqs(){
    	return view('faqs');
    }
    public function story(){
    	return view('news');
    }
    
    public function newsdetails(Request $request){
    	$alldata=Home::all()->toArray();
    	
    	$datas=Home::find($request->id)->toArray();
    	return view('details', compact('datas'), compact('alldata'));
    }
    public function contact(){
    	return view('contact');
    }
}
