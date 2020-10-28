
    @extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('css/editwork_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tags.css') }}">
    @section('content')
        @section('title')
            Редактирование работы
        @endsection
 
        <div class="container">
         
    <section class="title_img">
       <div class="row">
            <img src="img/edit_main.svg" alt="" class="edit_mainimg">
            <h1 class="title">Редактирование работы</h1>
        </div> <!-- container -->
    </section>
    @foreach ($get_par as $g)
    <form action="upd/check?id={{$g->id}}" method="POST">
        @csrf
    <section class="edit_form">
        <div class="row">
       
           <div class="col-md-6">
           <input type="text" class="editwork_title" name="name" value="{{ $g->title }}">
           </div>
           <div class="col-md-4">
                <select name="genre-upd" id="" class="edit_genre">
                <option value="{{$g->genre}}" selected>{{$g->genre}}</option>
                    <option value="Боевик">Боевик</option> 
                    <option value="Детектив">Детектив</option> 
                    <option value="Драма"></option> 
                    <option value="Приключения">Приключения</option> 
                    <option value="Романитка">Романтика</option> 
                    <option value="Ужасы">Ужасы</option> 
                    <option value="Фэнтэзи">Фэнтэзи</option> 
                    <option value="Юмор">Юмор</option> 
                </select>
            </div>
            </div> <!-- title_genre -->
            <div class="row">
                <div class="col-md-12">
            <div class="textarea edit_textarea">
                <textarea name="text-t" id="edit_text" class="textarea_text edit_text">
                    {{$g->text}}
                </textarea>
                
            </div> <!-- chapter_textarea -->
        </div>
        </div>
            <h2 class="content_title">Содержание</h2>
            
            <div class="content_list">
                @foreach ($getText as $text)
                <ol>
                    <li><a href="#" class="content_link">{{$text->name}}</a></li>
                </ol>

                @endforeach
               
            </div> <!-- content_list -->
    </section>

            <div class="buttons edit_buttons">
                <button type="submit" class="par-btn btn edit_save">Сохранить изменения</button>
                <a href='{{ route('addPar', ['id'=>$g->id]) }}'  class="par-btn edit_addnew">Добавить новую главу</a>
                {{-- <button type="submit" class="btn edit_save">Сохранить изменения</button>
                <a href="addchapter.html" class="btn edit_addnew">Добавить новую главу</a> --}}
            </div> <!-- buttons -->
        </form>
        </div> <!-- container -->
        @endforeach
    </div>
    @endsection
   
