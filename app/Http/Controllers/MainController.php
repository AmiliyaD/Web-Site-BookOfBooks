<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\history2;
class MainController extends Controller
{

    public function allAutors(){
        $getAutors = DB::select('select * from users');
        return view('allAutors', ['autors' => $getAutors]);
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
      public function getText() {
        $user = DB::table('hisotry_text')->where('id', $_GET['id'])->get();
        $user2 = DB::table('history2')->where('id', $_GET['id'])->get();
      
// выводим и текст и имя работы
        return view('workText', ['text' => $user,
                                'text2' => $user2
        ]);
      }

      public function allWorks() {
          $get = DB::select('select * from history2');
        //   выводим основную инфу о работах
          return view('allWorks', ['get' =>$get]);
      }
  
    public function get(){
        $get = DB::select('select * from history2');

        return view('first', ['get' => $get]);
    }
};
