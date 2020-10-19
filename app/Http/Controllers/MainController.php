<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\history2;
class MainController extends Controller
{

    public function allAutors(){
        return view('allAutors');
    }
    public function search(){
        return view('search');
    }
    public function add(){
        return view('addWorks');
    }
    public function reg() {
      return view('auth.reg');
    }
    public function enter() {
        return view('auth.login');
      }

      public function allWorks() {
          $get = DB::select('select * from history2');
          return view('allWorks', ['get' =>$get]);
      }
  
    public function get(){
        $get = DB::select('select * from history2');

        return view('first', ['get' => $get]);
    }
};
