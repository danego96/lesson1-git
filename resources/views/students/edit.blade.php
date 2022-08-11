@extends ('layouts.app')


@section ('title-block') Редактировать @endsection

@section ('content')

<h1>Обновление записи</h1>

<form action="{{ route('students.update', $data -> id) }}" method="post">
{{csrf_field()}}
{{ method_field('put') }}

<div class="mb-3">
    <label for="first_name" class="form-label">Введите имя</label>
    <input type="text" value="{{$data-> first_name}}" name="first_name" id="имя" class="form-control">
</div>
<div class="mb-3">
    <label for="middle_name" class="form-label">Введите отчество</label>
    <input type="text" value="{{$data-> middle_name}}" name="middle_name" id="имя" class="form-control">
</div>
<div class="mb-3">
    <label for="last_name" class="form-label">Введите фамилию</label>
    <input type="text" name="last_name" value="{{$data-> last_name}}" id="имя" class="form-control">
</div>
<div class="mb-3">
    <label for="birth_date" class="form-label">Дата рождения</label>
    <input type="date" value="{{$data-> birth_date}}" name="birth_date" placeholder="Введите название группы" id="имя" class="form-control">
</div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>
<br>
<form action="{{ route('students.destroy', $data -> id) }}" method="post">
{{csrf_field()}}
{{ method_field('delete') }}
<button class="btn btn-danger">Удалить</button>
</form>


@endsection