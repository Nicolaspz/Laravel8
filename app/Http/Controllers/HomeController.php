<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        dd("voce n é normal");
        if(Auth::user()->nivel=="normal"){

            return view('home');
        }
       else {
        dd("voce n é normal");
       }



    }
    public function dashboard(){
        $area=Area::get();
        if(Auth::user()->nivel=="normal"){
            return view('dashboard');
        }
        else {
            return view('dashboard');
           // return view('adim.post.candidato',compact('area'));
        }



      }

}
