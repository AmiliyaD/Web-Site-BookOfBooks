@extends('main.main')
<link rel="stylesheet" href="{{ asset('сss/partext.css') }}">
@section('main-block')
@section('title')
    Просмотр главы
@endsection
<div class="row">
    {{-- ОПИСАНИЕ РАБОТЫ --}}
    @foreach ($par_text as $h1)
        

    <div class="col-12">
    <h1 class="text-center">{{$h1->title}}</h1>
  
</div>
@endforeach
</div>

<div class="row">

@foreach ($par as $main_par)
    

<div class="col-12">
<p class="text-center par-p">{{$main_par->name}}</p>
  

      
</div>
</div>
<div class="row">
<div class="col-md-12">
<p>{{$main_par->history_text}}</p>
</div>
</div>
{{-- ГЛАВЫ РАБОТЫ --}}
<div class="row">
    <div class="col-md-4 offset-md-5">
        <button class="par-btn">К следующей главе</button>
        <div class="w-100"></div>
        <a href="">Назад к содержанию</a>
    </div>

</div>
{{-- форма для комменатриев --}}
<form action="" class="border" class="co">
<div class="row">
    <div class="col-md-12">
        <h2>Комментарий</h2>
    </div>
    
    <div class="col-md-9 ">
        <input type="text">
    </div>
    <div class="col-md-3">
        <button>Отправить</button>
    </div>

</div>
</form>
{{-- текст с комменатриями --}}
<div class="row">
    <div class="col-md-3">
<h4>Мекрок Мекроков</h4>
    </div>
    <div class="col-md-9">
        <p>Шикарная работа! Как жаль, что уже вышел эпилог :(</p>
    </div>
</div>
@endforeach
@endsection