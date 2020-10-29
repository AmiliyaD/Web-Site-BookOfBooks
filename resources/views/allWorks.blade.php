<link rel="stylesheet" href="{{ asset('css/allWorks.css') }}">
<link rel="stylesheet" href="{{ asset('css/tags.css') }}">
@extends('main.main')
@section('title')
Все работы
@endsection
@section('main-block')
{{-- header --}}
<div class="row allHeadr  align-middle">
    <div class="col-6">
        <img src="{{ asset('img/s.png') }}" class="img-fluid" alt="">
    </div>
    <div class="col-md-5 col-sm-12 col-12 align-baseline ">
        <div class="r d-flex flex-column">
            <h2 class="text-center">Все работы</h2>
            <input type="text" name="" id="" class="inc" placeholder="Введите название работы">

            <button class="btn btn-success">Найти</button>
            <a href="{{ route('search') }}" class="text-center works-all">Больше параметров для поиска </a>
        </div>
    </div>
</div>
{{-- header --}}

{{-- autors --}}
{{-- stories --}}
<div class="row ">

    <div class="w-100"></div>
    @foreach ($get as $g)
    <div class="col-md-12  first-bor">
        <div class="row first-stories">

            <div class="col-md-6 offset-1">
                <h2 class="works-h2"><a href="">{{ $g->title }}</a></h2>

            </div>
            
            <div class="col-md-1 offset-xs-1">
                <img src="{{ asset('img/ы.png') }}" alt="">
                <span>123</span>
            </div>
            <div class="col-md-1  offset-xs-1">
                <img src="{{ asset('img/i2.png') }}" alt="">
                <span>123</span>
            </div>
            <div class="col-md-3">
                <p class='work-genre work-detective text-center'>  Детектив</p>
              
            </div>

            <div class="col-2 offset-1">
                <p class="work-autor">{{ $g->autor }}</p>
            </div>
            <div class="col-3 offset-1">
                <p class="work-date">{{ $g->created}}</p>
            </div>
            <div class="col-4 work-process text-right">
                <p>Завершен</p>
            </div>
            {{-- вторая строка --}}
            <div class="col-md-10 offset-1">
                <p>{{ $g->text }}</p>
            </div>
        </div>

    </div>
    @endforeach


</div>

@endsection
