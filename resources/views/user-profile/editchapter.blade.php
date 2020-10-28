
   
 @extends('layouts.app')
 <link rel="stylesheet" href="{{ asset('css/editchapter_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tags.css') }}">
 @section('content')
 <div class="container">
           
  
    
    <section class="editchapter_form">
       <div class="container">
            <h1 class="edit_title text-center">Редактирование главы</h1>
            @foreach ($chapter as $ch)
       <form action="check?chapter_id={{$ch->id}}" method="POST">
        @csrf
            <input type="text" name="chapter_name" class="editchapter_title" value="{{$ch->name}}">

                <div class="textarea chapter_textarea">
                    <textarea name="chapter_text" id="" class="textarea_text editchapter_text">
        
                      {{$ch->history_text}}
               
                    </textarea>
                </div> <!-- chapter_textarea -->

                <div class="buttons editchapter_buttons">
                    <button type="submit" class="editchapter_save edit-btn">Сохранить изменения</button>
                    {{-- <a onclick="javascript:history.back(); return false;" class="edit-btn editchapter_back">Назад</a>
                    <button type="submit" class="editchapter_delete edit-btn">Удалить главу</button> --}}
                </div> <!-- editchapter_buttons -->
            </form>
            @endforeach
        </div> <!-- container -->
    </section>
    
 
 @endsection
    