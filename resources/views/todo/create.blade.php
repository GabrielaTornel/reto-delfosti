<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Reto-delfosti</title>
</head>
<body>
  <div class="container">
    <h4>Agregar nueva tarea</h4>
    <div class="row">
     <div class="col-xl-12">
      <form action="{{route('todo.store')}}" method="post">
         @csrf
        <div class="form-group" method="post">
          <label for="name"> Nombre de la tarea</label>
            <input type="text" class="form-control" name="name" placeholder="" requerided maxlength="50">
          
        </div>
        <div class="form-group" method="post">
          <label for="slug">Descripcion de la tarea</label>
            <input type="text" class="form-control" name="slug" placeholder="" requerided maxlength="100">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary my-1 " value="Guardar"> 
          <input type="reset" class="btn btn-default my-1  " value="Cancelar"> 
          <a href="javascript:history.back()" clas="my-1 ">Regresar a lista de tareas</a>
        </div>
      </form>
     </div>
    </div>
  </div>
</body>
</html>