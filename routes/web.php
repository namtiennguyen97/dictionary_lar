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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dictionary', function (){
    return view('dictionary');
});

Route::get('/result',function (){
   return view('result');
});

Route::get('/dictionary/result',function (){
    return view('result');
});
Route::post('/dictionary',function (Illuminate\Http\Request $request){
   $arr=['cat'=>'meo','dog'=>'cho','bat'=>'doi','pig'=>'lon'
   ];
   $text = $request->text;
   foreach ($arr as $key=>$value){
       if ($text=== $key){
           echo $value;
           break;
       }
   }
return view('result',compact(['value']));
});
