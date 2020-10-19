@extends('main.goHome')
<link rel="stylesheet" href="{{ asset('css/reg.css') }}">
@section('title')
    Вход
@endsection
@section('main-block')
    <div class="row">
        <div class="col-md-6 offset-3">
        <img src="{{ asset('img/key.png') }}" alt="">
        </div>
    </div>
    <div class="col-md-6 offset-3">
        <h1 class='text-center'>Вход</h1>
        <form action="" class="form-group f-reg">
            <input type="text" class="form-control" placeholder="Логин">
            <input type="text" class="form-control" placeholder="Пароль">
            <button>Войти</button>
        </form>
        <p class='text-center'><a href="{{ route('reg') }}" class=' f-reg-p'> Еще нет аккаунта? Зарегистрируйтесь</a> </p>
    </div>
@endsection