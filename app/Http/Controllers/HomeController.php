<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $random=mt_rand(1,6);

        if ($_GET){
            if(isset($_GET['1'])){
                $random=mt_rand(2,5);
            }
            elseif (isset($_GET['2'])){
                $random=mt_rand(3,4);
                if ($random==3){
                    $random=1;
                }elseif($random==4){
                    $random=6;
                }
            }
            elseif(isset($_GET['3'])){
                $random=mt_rand(1,3);

            }elseif(isset($_GET['4'])){
                $random=mt_rand(4,6);
            }
        }
        $result='h'.$random.'.png';
        $info='ចេញលេខ '.$random;

        return view('home')->with('result',$result)->with('info',$info);
    }
}
