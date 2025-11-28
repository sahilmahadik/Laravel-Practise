<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/post",function () {
//     return view("post");
// });

// Route::get('/message/{msg}',function(string $msg = null){
//     return "<h1> Message : {$msg}</h1>";
// });

// Route::get('/optional/{msg?}',function(string $msg = null){
//     if($msg){
//         return "<h1> Message : {$msg}</h1>";
//     }
//     else{
//         return "<h1> No Message is Found</h1>";
//     }
// });



// Laravel Route Constraints

/*
Route::get('constraint/numeric/{id}',function(string $id){
    return "<h1> Number  Constraint is  : {$id} </h1>";
})->whereNumber('id');


Route::get('constraint/alpha/{id}',function(string $id){
    return "<h1> Character Constraint is  : {$id} </h1>";
})->whereAlpha('id');


Route::get('constraint/alphanumeric/{id}',function(string $id){
    return "<h1> Alpha Numeric Constraint is :  {$id} </h1>";
})->whereAlphaNumeric('id');


Route::get('constraint/category/{id}',function(string $id){
    return "<h1> Category Constraint is :  {$id} </h1>";
})->whereIn('id',['php','javascript']);


Route::get('constraint/expression/{id}',function(string $id){
    return "<h1> Regular Expression Constraint is :  {$id} </h1>";
})->where('id',expression: '[@0-9]+');


Route::get('youtube/{id}/comment/{comment}',function(string $id,string $comment){
    return "<h1> Youtube id is :  {$id} </h1>
            <h2> Comment is : {$comment} </h2>";
})->whereNumber('id')->whereAlpha('comment');
*/


// // Named Routes and Group Routes

// /** Name Routes */
// Route::get('route1234',function(){
//     return view('namedRoute1');
// })->name('sahil1');

// Route::get('route2',function(){
//     return view('namedRoute2');
// })->name('sahil2');

// Route::get('route/test',function(){
//     return view('namedRoute3');
// })->name('sahil3');


// Route::get('/redirect',function(){
//     return "<h2>hit /test url in browser it will redirect to /redirect</h2>";
// });


// // Redirect Url
// Route::redirect('/test','/redirect');




// /** Group Route */

// Route::prefix('page')->group(function(){

//     Route::get('/about',function(){
//         return "<h1> Group Route About </h1>";
//     });


//     Route::get('/gallert',function(){
//         return "<h1> Group Route  for About page </h1>";
//     });


//     Route::get('/post',function(){
//         return "<h1> Group Route Post page </h1>";
//     });

// });



// Route::fallback(function(){
//     return "<h1>Page is not Found</h1>";
// });




// Route::get('basic/template1',function(){
//     return view('basic.template1');
// })->name('template1');

// Route::get('basic/template2',function(){
//     return view('basic.template2');
// })->name('template2');