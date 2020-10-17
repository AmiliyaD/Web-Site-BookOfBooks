<link rel="stylesheet" href="{{ asset('css/allWorks.css') }}">
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
            {{-- первая строка --}}
<div class="col-md-6 offset-1 ">
<h2>{{ $g->title }}</h2>

</div>
<div class="col-1">
234
</div>
<div class="col-1">
234
</div>
<div class="col-2">
Детектив
</div>
<div class="col-2 offset-1">
<p>{{ $g->autor }}</p>
</div>
<div class="col-3 offset-1">
<p>{{ $g->created}}</p>
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