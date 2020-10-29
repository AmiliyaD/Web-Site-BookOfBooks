<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\history2;
use Illuminate\Support\Facades\Auth;
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
      $genres = DB::select('select * from genres');
        return view('addWorks', ['genre' => $genres]);
    }
    public function reg() {
      return view('auth.reg');
    }
    public function enter() {
        return view('auth.login');
      }
       //ПРОСМОТР РАБОТ
       // выводим и текст и имя работы
      public function getText() {
        $user = DB::table('history_par')->where('id_h', $_GET['id'])->get();
        $user2 = DB::table('history2')->where('id', $_GET['id'])->get();
     

        return view('workText', ['text' => $user,
                                 'text2' => $user2]);
      }
      //просмотр глав
      public function getPar()
      {
        $par_text = DB::table('history2')->where('id', $_GET['id_h'])->get();
        $par = DB::table('history_par')->where('id', $_GET['id'])->get();

        return view('parText', ['par_text' => $par_text,
                                'par' => $par ]);
  
      }

      //   выводим основную инфу о работах
      public function allWorks() {
          $get = DB::select('select * from history2');

          return view('allWorks', ['get' =>$get]);
      }
  
    public function get(){
        $get = DB::select('select * from history2');
      $genres = DB::select('select * from genres');
        return view('first', ['get' => $get,
                              'genres' => $genres]);
    }
    //заносим данные в базу
    public function rewiew_check(Request $reques) {
      DB::table('history2')->insert(array('autor' => $reques->input('name'), 'title' => $reques->input('title'), 'text' => $reques->input('text'), 'genre' => $reques->input('genre'), 'user_id' => $reques->input(Auth::user()->id)));

    }
    //выводим текст
    public function get_text()
    {
    
      $get = DB::table('history2')->where('autor', $_GET['name'])->get();
        return view('user-profile.home', ['get' => $get]);
    }
//перебрасываем на страницу добавления глав
    public function get_par()
    {
      # code...
      $genres = DB::select('select * from genres');
      $get = DB::table('history2')->where('id', $_GET['id'])->get();
      $getParText = DB::table('history_par')->where('id_h', $_GET['id'])->get();
      return view('user-profile.addText', ['get_par' => $get,
                                            'getText' => $getParText,
                                            'genre' => $genres  ]);
    }
    //переход на страницу добавления главы
    public function add_par()
    {
      $get = DB::table('history2')->where('id', $_GET['id'])->get();
      return view('user-profile.addPar', ['get' => $get]);
    }
       //обновить основные параметры фанфика
       public function update(Request $r) {
        echo 'изменения сохранены';
        DB::table('history2')->where('id', $_GET['id'])->update(array('title' => $r->input('name'), 'text' => $r->input('text-t'), 'genre' => $r->input('genre-upd')));
      }
    //добавить текст к главам
    public function addText(Request $r) {
    $get = DB::table('history_par')->select('id')->get();
    DB::table('history_par')->insert(array('id_h'=> $_GET['id'], 'name'=>$r->input('add-name'), 'history_text' => $r->input('add-text')));
echo 'глава добавлена';
dd($get);
}
// ГЛАВЫ

//редактирование главы
 
    public function edit_chapter() {
      $chapter = DB::table('history_par')->where('id', $_GET['id'])->get();
      return view('user-profile.editchapter', ['chapter' => $chapter]);
    }

    //изменение главы
    public function update_pars(Request $r) {
      echo 'изменения сохранены';
      DB::table('history_par')->where('id', $_GET['chapter_id'])->update(array('name' => $r->input('chapter_name'), 'history_text' => $r->input('chapter_text')));
    }

 

    
}


