<nav class="navbar nb navbar-expand-lg">
    
<img src="{{ asset('img/logo.png') }}" alt=""><a class="navbar-brand" href="#">BookOfBooks</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="headerU navbar-nav mr-auto  center">
        <li class="nav-item active">
        <a class="nav-link as" href="{{ route('main') }}">Главная <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Все работы</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{ route('add') }}">Добавить работу</a>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('allWorks') }}">Все авторы</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('search') }}">Поиск</a>
          </li>
 
      </ul>
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item active">
        <a class="nav-link as" href="{{ route('enter') }}">Вход <span class="sr-only">(current)</span></a>
        </li>
        <span>|</span>
        <li class="nav-item active">
        <a class="nav-link" href="{{ route('reg') }}">Регистрация <span class="sr-only">(current)</span></a>
          </li>
         
        
      </ul>
    </div>
  </nav>