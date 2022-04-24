

@extends ('layouts.app')


@section ('title-block') Группы @endsection

@section ('content')

<a href="{{ route('create-group') }}"><button type="button" class="btn btn-primary">Добавить группу</button></a>


<table class="table table-hover">
  <thead>
  <tr>
      <th scope="col">Код группы</th>
      <th scope="col">Наименование</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $el)
  <tr>
    <td>{{ $el->id }}</td>
    <td>{{ $el->name }}</td>
</tr>
@endforeach
  </tbody>
</table>
{{$data -> links()}}
@endsection