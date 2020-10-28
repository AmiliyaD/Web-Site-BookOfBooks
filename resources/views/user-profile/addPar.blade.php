{{-- ДОБАВЛЕНИЕ НОВОЙ ГЛАВЫ --}}
@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/par.css') }}">
@section('content')
@section('title')
Добавление главы
@endsection
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class='text-center'>Добавление главы</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">

            {{-- form --}}
            @foreach ($get as $g)


            <form action="asd?id={{$g->id}}" method="POST">
                @csrf
                <input type="text" name='add-name' class="par-name par">
                <div class="w-100"></div>
                <textarea id="" cols="30" name="add-text" class="par-text par" rows="10"></textarea>
                <div class="w-100"></div>
                <button type="submit" class="par-btn">Готово</button>
            </form>
            @endforeach
        </div>
    </div>

</div>
@endsection
