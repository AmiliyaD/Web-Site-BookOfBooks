

    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">BookOfBooks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto center">
          <li class="nav-item active">
          <a class="nav-link" href="{{ route('main') }}">Главная <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{ route('allAutors') }}">Все работы</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Все авторы</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Поиск</a>
            </li>
   
        </ul>
      
      
      </div>
   
    </nav>


    <div class="w-100"></div>
 <p class="text-center">Администрация не несет ответственности за содержание работ <br>

 {{ date('Y')}}</p>

