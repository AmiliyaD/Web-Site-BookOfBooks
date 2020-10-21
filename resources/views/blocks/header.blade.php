@extends('layouts.app')

<nav class="navbar navbar-expand-md navbar-light ">
  <div class="container">
                          
<img src="{{ asset('img/logo.png') }}" alt=""><a class="navbar-brand" href="{{ route('main') }}">BookOfBooks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

<li class="nav-item active">
<a class="nav-link" href="{{ route('main') }}">Главная <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('allWorks') }}">Все работы</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('add') }}">Добавить работу</a>
</li>


<li class="nav-item">
<a class="nav-link" href="{{ route('allAutors') }}">Все авторы</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('search') }}">Поиск</a>
</li>


</div>
<ul class="navbar-nav ml-auto ">
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                  </li>
                  @if (Route::has('reg'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('reg') }}">{{ __('Регистрация') }}</a>
                      </li>
                  </ul>
                  @endif
              @else
              
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

 
