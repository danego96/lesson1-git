@extends ('layouts.app')

@section ('title-block') Добавить студента @endsection

@section ('content')
<h1>Добавить нового студента</h1>



<form action="{{ route('students.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="first_name" class="form-label">Введите имя</label>
        <input type="text" name="first_name" id="имя" class="form-control">
    </div>
    <div class="mb-3">
        <label for="middle_name" class="form-label">Введите отчество</label>
        <input type="text" name="middle_name" id="имя" class="form-control">
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">Введите фамилию</label>
        <input type="text" name="last_name" id="имя" class="form-control">
    </div>
    <div class="mb-3">
        <label for="birth_date" class="form-label">Дата рождения</label>
        <input type="date" name="birth_date" placeholder="Введите название группы" id="имя" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>


@endsection