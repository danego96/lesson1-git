@extends ('layouts.app')


@section ('title-block') Редактировать @endsection

@section ('content')

<h1>Обновление записи</h1>



<form action="{{ route('group-edit-submit', $data -> id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Введите название группы</label>
        <input type="text" value="{{$data-> name}}" name="name" placeholder="Введите имя" id="имя" class="form-control">
    </div>
    <button type="submit" class="btn btn-success">Обновить</button>
</form>


@endsection