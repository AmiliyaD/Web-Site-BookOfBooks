@extends('main.main')
@section('main-block')
@section('title')
    Добавить работу
@endsection
<link rel="stylesheet" href="{{ asset('css/addWorks.css') }}">
@if (Auth::check())
<div class="row">
    <div class="col-8 offset-2">
        <img src="{{ asset('img/r.svg') }}" alt="" class="img-fluid text-center">
        <h1 class="text-center">Добавление работы</h1>
  
        <form action="add/check" method="post">
            @csrf
            <div class="form-group">

                <input type="text" name="name" id="name" class="works-author  works"  value='{{Auth::user()->name }}' readonly >
            
                <input type="text" placeholder="Название работы" name="title" id="name" class="works-name  works">
            
                <select id="" name='genre' class="works-select works">
                    @foreach ($genre as $g)
                <option value="{{$g->name}}" >{{$g->name}}</option>
                    @endforeach
                  
                </select>
                <div class="w-100"></div>
            
                <textarea class="works-text works" name="text" placeholder="Описание" id="text" rows="3"></textarea>

                <button type='submit' class="works-button">Отправить</button>
            
                
            </div>
        </form>
    </div>
</div>

@else
    <p>Вы не зарегистрированы</p>
    Зарегистироваться? 
    <a href="{{ route('reg' )}}" class="btn button-blue">Регистрация</a>
    <div class="w-100"></div>
    Авторизироваться? 
    <a href="{{ route('enter' )}}" class="btn button-blue ">Авторизация</a>
@endif
{{-- header --}}


@endsection