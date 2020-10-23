
@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/reg.css') }}">
@section('title')
    Регистрация
@endsection

<div class="container">


    <div class="row reg">
        <div class="col-md-6">
            <img src="{{ asset('img/door.png') }}" class='img-fluid' alt="">
        </div>
        <div class="col-md-6 ml-auto">
          <h1 class="text-center">Регистрация</h1>

          <div class="card">

            <div class="card-body">

                <form method="POST" action="{{ route('register') }}" >
                    @csrf

                   {{-- name --}}
   
                   
                        <input id="name" type="text" placeholder="Имя" class="form-control align-self-lg-end @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                 {{-- surname --}}
                        <input id="login" type="text" placeholder="Фамилия" class="form-control" name="surname" required autocomplete="surname">

                        @error('login')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
              {{-- email --}}
                                          
                            <input id="email" placeholder="Email (Логин)" type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                       
              
                {{-- password --}}
              
                            <input id="password" type="password" placeholder="Пароль" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        

                  {{-- password-confirm --}}
                       
                            <input id="password-confirm" type="password" placeholder="Подтвердить пароль" class="form-control" name="password_confirmation" required autocomplete="new-password">
                       
                    {{-- button --}}
                    <div class="form-group">
                 
                            <button type="submit" class="f-reg-button">
                                {{ __('Зарегистрироваться') }}
                            </button>
                       
                    </div>
                   
                </form>
               
            </div>
            <a href="{{ route('enter') }}" class="text-center reg-a">Уже есть аккаунт? Войдите!</a>
        </div>
        </div>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
