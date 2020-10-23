@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/allWorks.css') }}">
@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-md-6">
  <img src="{{ asset('img/ava.png') }}" alt="">
        <h1 class="text-center">{{Auth::user()->name}} {{Auth::user()->surname}}</h1>

        </div>
 
    </div>
    <div class="row">
        <div class="col-md-4 offset-md-5">
            <a class="btn btn-success" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
{{ __('Logout') }}

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
</a>

        </div>
    </div>
    <div class="row">
      
       <h2>Все работы</h2>
            @foreach ($get as $g)
            <div class="col-md-12  first-bor border">
                <div class="row first-stories">
        
                    <div class="col-md-6 offset-1">
                    <h2 class="works-h2"><a href="{{ route('workText', ['id'=>$g->id]) }}">{{ $g->title }}</a></h2>
        
                    </div>
                    
                    <div class="col-md-1 offset-xs-1">
                        <img src="{{ asset('img/ы.png') }}" alt="">
                    <span>{{ $g->likes }}</span>
                    </div>
                    <div class="col-md-1  offset-xs-1">
                        <img src="{{ asset('img/i2.png') }}" alt="">
                        <span>123</span>
                    </div>
                    <div class="col-md-3">
                    <p class='work-genre work-detective text-center {{ $g->genre }}'>{{ $g->genre }}</p>
                      
                    </div>
        
                    <div class="col-2 offset-1">
                        <p class="work-autor">{{ $g->autor }}</p>
                    </div>
                    <div class="col-3 offset-1">
                        <p class="work-date">{{ $g->created}}</p>
                    </div>
                    <div class="col-4 work-process text-right">
                    <p>{{$g->status }}</p>
                    </div>
                    {{-- вторая строка --}}
                     <div class="col-md-10 offset-1">
                        <p>{{ $g->text }}</p>
                    </div>
                </div>
        
            </div>
                @endforeach
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
