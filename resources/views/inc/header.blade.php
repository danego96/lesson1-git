<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Электронный журнал</span>
      </a>

      <ul class="nav nav-pills">
      <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page">Главная</a></li>
        <li class="nav-item"><a href="{{ route('groups.index') }}" class="nav-link">Группы</a></li>
        <li class="nav-item"><a href="{{ route('students.index') }}" class="nav-link">Список студентов</a></li>
      </ul>
    </header>

    