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

Route::get('/',function (){
    $random=mt_rand(1,6);

    if ($_GET){
        if(isset($_GET['1'])){
            $random=mt_rand(1,6);

        }
        elseif (isset($_GET['2'])){
            $random=mt_rand(4,6);

        }
        elseif(isset($_GET['3'])){
            $random=mt_rand(1,3);

        }
    }
    $result='h'.$random.'.png';
    $info='ចេញលេខ '.$random;

    return view('welcome')->with('result',$result)->with('info',$info);

});

Route::get('/welcome','WelcomeController@index')->name('/welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function (){
    return view('about');
});


