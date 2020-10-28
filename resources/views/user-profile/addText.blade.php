{{-- РЕДАКТИРОВАНИЕ ИСТОРИЙ (РАБОТЫ) --}}

@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/par.css') }}">
@section('content')
@section('title')
    Редактирование работы
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            {{-- НАЧАЛО --}}
            <img src="{{ asset('img/red.png') }}" class="img-fluid" alt="">
            <h1 class="text-center">Редактирование работы</h1>
        </div>
    </div>
    
      
            @foreach ($get_par as $g)
     
            
            {{-- ФОРМА РЕДАКТИРОВАНИЯ РАБОТЫ --}}
            <form action="upd/check?id={{$g->id}}" method="POST">
                <div class="row">
                <div class="col-md-8">
                @csrf
                <input type="text" class="all-input" name="name" value='{{$g->title}}'>
                </div>
                

              
                 <div class="col-md-4">
                <select name="genre-upd" id="" class="edit_genre">
                    @foreach ($genre as $ge)
                        
              
                <option value="{{$ge->name}}">{{$ge->name}}</option> 
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <textarea  id="" cols="30" rows="10" name="text-t" class="all-text">{{$g->text}}</textarea>
            </div>
        </div>
                <div class="row">
                     {{-- СОДЕРЖАНИЕ РАБОТЫ --}}
                    <div class="col-6">
                        <h2>Содержание работы</h2>
                    </div>
                  
                </div>
                <div class="row">
                    <div class="col-6">
                        @foreach ($getText as $text)
                        <ul>
                            <li><a href="{{ route('chapter', ['id'=>$text->id]) }}">{{$text->name}}</a></li>
                        </ul>
   
                        @endforeach
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-10 col-12">
                        <button type="submit" class="par-btn">Сохранить изменения</button>
                        <a href='{{ route('addPar', ['id'=>$g->id]) }}'  class="par-btn">Добавить новую главу</a>
                    </div>
                </div>
          
            </form>
        
   
   
             @endforeach
       

   </div>

@endsection
