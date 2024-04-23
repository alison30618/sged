<!doctype html>  
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de eventos</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de eventos</h1>
      <a href="{{route('eventos.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha</th> 
                    <th scope="col">Ubicacion</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($eventos as $evento)
                <tr>
                    <th scope="row">{{ $evento->id }}</th>
                    <td>{{ $evento->nombre }}</td>
                    <td>{{ $evento->descripcion }}</td>
                    <td>{{ $evento->fecha }}</td>  
                    <td>{{ $evento->ubicacion }}</td> 
                    <td>{{ $evento->tipo }}</td>  
                    <td>
                    <a href="{{route('eventos.edit', ['evento'=> $evento->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('eventos.destroy' , ['evento' => $evento->id])}}"
                    method="POST" style="display: inline-block">
                    @method('delete')
                    @csrf
                    <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
    </div>
    

    
   </body> 
   
</html> 