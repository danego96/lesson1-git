

@extends ('layouts.app')


@section ('title-block') Группы @endsection

@section ('content')

<a href="{{ route('groups.create') }}"><button type="button" class="btn btn-primary">Добавить группу</button></a>


<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">Код группы</th>
      <th scope="col">Наименование</th>
      <th scope="col">Редактировать</th>
      <th scope="col">Детальнее</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $el)
  <tr>
    <td>{{ $el->id }}</td>
    <td>{{ $el->name }}</td>
    <td><a href="{{ route('groups.edit', $el -> id) }}">Редактировать</a></td>
    <td><a href="#">Детали</a></td>
</tr>
@endforeach
  </tbody>
</table>
{{$data -> links()}}
@endsection