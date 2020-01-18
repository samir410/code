<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
 Route::get('/', function () {
     return view('welcome');
   });



Route::get('/','HomeController@index');
Route::resource('/product','ProductController');
//Route::get('/reg','RegController');
Route::view('/registration', 'registration');
Route::view('/about', 'about');
Route::view('/home', 'home');
Route::view('/contact', 'contact');
Route::post('product/submitRating', 'ProductController@submitRating');
//Route::post('/submit-data', function (Request $request) {
	//$data=array('name'=>$request->user_name ,'email'=>$request->Email, 'massage'=>$request->Massage );
	//dd($data);
    //return view('/contact-submit',['data'=>$data]);

 Route::post('/submit-registration', function (Request $request) {
  $data=array('F_name'=>$request->first_name , 'L_name'=>$request->last_name , 'question'=>$request->Question, 'email'=>$request->email, 'gender'=>$request->gender,'pass'=>$request->password, 'number'=>$request->txtEmpPhone, 'Ans'=>$request->Answer);
	//dd($data1);
        return view('/show-registration',['data'=>$data]);
     // Route::resource('/regestration','RegController');
     });