@extends('main.main')
@section('main-block')

@if (Auth::check())
<div class="row">
    <div class="col-8 offset-2">
        <img src="{{ asset('img/r.svg') }}" alt="" class="img-fluid text-center">
        <h1 class="text-center">Добавление работы</h1>
        <p>Вы зарегистрированы</p>

        <form action="add/check" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Ваше имя</label>
                <input type="text" name="name" id="name"  value='{{Auth::user()->name }}' readonly class="form-control">
                
                <label for="name">Название</label>
                <input type="text" name="title" id="name" class="form-control">
                <label for="name">Выберите жанр</label>
                <select id="" name='genre'>
                    <option value="Фэнтези" >Фэнтэзи</option>
                    <option value="Детектив">Дететкив</option>
                    <option value="Ужасы">Ужасы</option>
                    <option value="Романтика">Романтика</option>
                    <option value="Приключения">Приключения</option>
                    <option value="Другое">Другое</option>
                </select>
                <div class="w-100"></div>
                <label for="exampleFormControlTextarea1">Ваш текст</label>
                <textarea class="form-control" name="text" id="text" rows="3"></textarea>

                <button type='submit' class="btn btn-success">Отправить</button>
            </div>
        </form>
    </div>
</div>

@else
    <p>Вы не зарегистрированы</p>
    Зарегистироваться? 
    <a href="{{ route('reg' )}}" class="btn button-blue">Регистрация</a>
    <div class="w-100"></div>
    Авторизироваться? 
    <a href="{{ route('enter' )}}" class="btn button-blue ">Авторизация</a>
@endif
{{-- header --}}


@endsection