<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>todos</title>
</head>
<body>
  <div class="container">
    <h4>Tareas por hacer</h4>
    <div class="row">
      <div class="col-xl-12">
        <form action="{{route('todo.index')}}" method="get" value="{{$texto}}">
          <div class="form-row">
            <div class="col-sm-4 my-2">
              <input type="text" class="form-control" name="texto" >
            </div>
            <div class="col-auto">
              <input type="submit" class="btn btn-primary" value= "buscar">
            </div>
          </div>
        </form>
      </div>
      <div class="col-xl-12">
        <div class="table-responsive">
         <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>slug</th>
              <th>Handle</th>
              <th>opciones</th>
            </tr>
           
          </thead>
          <tbody>
            @if (is_countable($todos) && count($todos) <= 0)
              <tr>
                <td colspan="8"> No hay resultado</td>
              </tr>
              @else
            @foreach ($todos as $todo )
           
            <tr>
            <td>hi</td>
            <td>2</td>
            <td>2</td>
            <td>julia</td>
            <td>Listo | eliminar</td>
            </tr>
            @endforeach
            @endif
          </tbody>
         </table>
         {{-- {{$todos -> links()}} --}}
        </div>
      </div>
    </div>
  </div>
</body>
</html>