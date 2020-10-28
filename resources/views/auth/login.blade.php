@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/log.css') }}">
<div class="container">
    <div class="row ">
        <div class="col-md-6 offset-3">
            <img src="{{ asset('img/key.png') }}" class='img-fluid' alt="">
            </div>
        </div>
        <div class="row">
        <div class="col-md-6 offset-3">
           
                <h2 class="text-center ">Вход</h2>

               
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                       
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                        
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          

{{--                       
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                          <input id="password" placeholder="Пароль" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                {{-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div> --}}
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-12">
                                <button type="submit" class="f-log-button">
                                    {{ __('Login') }}
                                </button>

                        </div>                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            
                            
            </div>
            <a href="{{ route('reg') }}" class="text-center log-a">Еще нет аккаунта? Зарегистрируйтесь</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
@endsection
