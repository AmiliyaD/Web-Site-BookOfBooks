<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\history2;
class MainController extends Controller
{
    public function main(){
        return view('first');
    }

    public function allWorks(){
        return view('allWorks');
    }
    public function search(){
        return view('new');
    }
    public function add(){
        return view('addWorks');
    }
    public function reg() {
      return view('registration.reg');
    }
    public function enter() {
        return view('registration.enter');
      }
  
    public function get(){
        $get = DB::select('select * from history2');

        return view('first', ['get' => $get]);
    }
};
