
@extends('main.main')
@section('main-block')
<div class="row">
    <div class="col-12">  @foreach ($text2 as $t)
        <h1 class="text-center">{{$t->title}}</h1>
        @endforeach</div>
  
</div>
<div class="col-12">
    @foreach ($text as $t)
    <p>{{$t->history_text }}</p>
    @endforeach
      
</div>

@endsection
