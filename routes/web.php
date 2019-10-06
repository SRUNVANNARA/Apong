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

    //============for general
    /*
    a:
    if (request()->random==1){
        $random=mt_rand(1,6);
        if($random==3){
            goto a;
        }
    }
    b:
    if (request()->random==4){
        $random=mt_rand(1,6);
        if($random==4){
            goto b;
        }
    }
    if (request()->random==2){
        $random=mt_rand(2,6);
    }
    c:
    if (request()->random==5){
        $random=mt_rand(1,6);
        if($random==4){
            goto c;
        }
    }
    d:
    if (request()->random==3){
        $random=mt_rand(1,6);
        if($random==3){
            goto d;
        }
    }
    e:
    if (request()->random==6){
        $random=mt_rand(1,6);
        if($random==5){
            goto e;
        }
    }
    */

//end for general

    //============5-1 and 2-6


        if(request()->random==2){
            $random=6;
        }elseif (request()->random==5){
            $random=1;
        }elseif (request()->random==1){
            $random=mt_rand(1,5);
        }elseif (request()->random==6){
            $random=mt_rand(2,5);
        }


    //============end 5-1 and 2-6

    //============4-1 and 3-6

    /*
        if(request()->random==3){
            $random=6;
        }elseif (request()->random==4){
            $random=1;
        }elseif (request()->random==1){
            $random=mt_rand(1,5);
        }elseif (request()->random==6){
            $random=mt_rand(2,5);
        }

    */
    //============end 4-1 and 3-6



    //============testing
    /*
    if (request()->random==1){
        a:
        $random=mt_rand(1,6);
        if($random==2 || $random==3){
            goto a;
        }
    }

    if (request()->random==5){
        b:
        $random=mt_rand(1,6);
        if($random==4 || $random==5){
            goto b;
        }
    }

    if (request()->random==2){
        c:
        $random=mt_rand(1,6);
        if($random==1 || $random==2){
            goto c;
        }
    }

    if (request()->random==6){
        d:
        $random=mt_rand(1,6);
        if($random==4 || $random==5){
            goto d;
        }
    }

    if (request()->random==3){
        e:
        $random=mt_rand(1,6);
        if($random==1 || $random==3){
            goto e;
        }
    }

    if (request()->random==4){
        f:
        $random=mt_rand(1,6);
        if($random==4 || $random==6){
            goto f;
        }
    }
    */
    //============testing

    //not to change
        $result = 'h' . $random . '.png';
        $info = 'ចេញលេខ ' . $random;

        return view('welcome')->with('result', $result)->with('info', $info)->with('random', $random);

    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function (){
    return view('about');
});


