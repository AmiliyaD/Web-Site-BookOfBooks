@extends('main.main')
@section('main-block')

@if (Auth::check())
<div class="row">
    <div class="col-8 offset-2">
        <img src="{{ asset('img/r.svg') }}" alt="" class="img-fluid text-center">
        <h1 class="text-center">Добавление работы</h1>
        <p>Вы зарегистрированы</p>
    </div>
</div>

@else
    <p>Вы не зарегистрированы</p>
@endif
{{-- header --}}


@endsection