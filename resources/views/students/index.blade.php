

@extends ('layouts.app')


@section ('title-block') Студенты @endsection

@section ('content')

<a href="{{ route('students.create') }}"><button type="button" class="btn btn-primary">Добавить студента</button></a>


<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">Номер студента</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Имя</th> 
      <th scope="col">Отчество</th>
      <th scope="col">Группа студента</th>
      <th scope="col">Дата рождения</th>
      <th scope="col">Редактировать</th>
      <th scope="col">Детальнее</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $el)
  <tr>
    <td>{{ $el->id }}</td>
    <td>{{ $el->last_name }}</td>
    <td>{{ $el->first_name }}</td>
    <td>{{ $el->middle_name }}</td>
    <td>{{ $el->group_id }}</td>
    <td>{{ $el->birth_date }}</td>
    <td><a href="{{ route('students.edit', $el -> id) }}">Редактировать</a></td>
    <td><a href="#">Детали</a></td>
</tr>
@endforeach
  </tbody>
</table>
{{$data -> links()}}
@endsection