{{-- ТЕКСТ РАБОТЫ И ГЛАВ --}}
@extends('main.main')
@section('main-block')
@section('title')
    Просмотр работы
@endsection
<div class="row">
    {{-- ОПИСАНИЕ РАБОТЫ --}}
    <div class="col-12">
        
        @foreach ($text2 as $t)
        <h1 class="text-center">{{$t->title}}</h1>
        <div class="w-100">
           
        </div>
        <p class="text-center">{{$t->autor}}</p>
      </div>
  
</div>
<div class="row">


<div class="col-12">
    
    <p>{{$t->text}}</p>

      
</div>
</div>
<div class="row">
<div class="col-md-3"><span>{{$t->genre}}</span></div>
<div class="col-md-3"><span>{{$t->status}}</span></div>
<div class="col-md-3"><span>{{$t->created}}</span></div>
</div>
{{-- ГЛАВЫ РАБОТЫ --}}
<div class="row">
    <div class="col-md-12">
        <h2>Содержание работы</h2>
    </div>
    <div class="col-md-6">
        @foreach ($text as $f)
     <ol>
     <li> <a href="{{ route('parText', ['id'=>$f->id, 'id_h' => $f->id_h]) }}">{{$f->name}}</a></li>
     </ol>
        @endforeach
    </div>
</div>
@endforeach
@endsection
