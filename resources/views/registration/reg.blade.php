@extends('main.goHome')

<link rel="stylesheet" href="{{ asset('css/reg.css') }}">
@section('title')
    Регистрация
@endsection

@section('main-block')
    <div class="row reg">
        <div class="col-md-6">
            <img src="{{ asset('img/door.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-md-6 ml-auto">
          <h1 class="text-center">Регистрация</h1>
          <form action="" method="post" class="form-group f-reg text-center">
              <input type="text" class="form-control" placeholder="Имя">
              <input type="text" class="form-control" placeholder="Фамилия">
              <input type="text" class="form-control" placeholder="Логин">
              <input type="text" class="form-control" placeholder="Пароль">

              <button type="submit">Зарегистрироваться </button>
          </form>
          <p class="f-reg-p text-center">Уже есть аккаунт? Войдите!</p>
        </div>
    </div>
  
@endsection