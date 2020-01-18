<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
   public function index(){
       $products= DB::table('products')->get();
       //dd($products);
       	
       return view('home', compact('products'));
   }
}
