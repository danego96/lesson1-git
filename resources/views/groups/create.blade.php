@extends ('layouts.app')

@section ('title-block') Добавить группу @endsection

@section ('content')
<h1>Добавить группу</h1>



<form action="{{ route('group-form') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Введите название группы</label>
        <input type="text" name="name" placeholder="Введите название группы" id="имя" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">Отправить</button>
</form>


@endsection