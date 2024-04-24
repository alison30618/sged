<!doctype html> 
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artistas') }}
        </h2>
    </x-slot>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de participaciones</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de participaciones</h1>
      <a href="{{route('participaciones.create')}}" class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Evento</th>
                    <th scope="col">Equipo</th>
                    <th scope="col">Resultado</th>
                    <th scope="col">Premios</th> 
                    <th scope="col">Actions</th> 
                </tr>
            </thead>
            <tbody>
             @foreach ($participaciones as $participacion)
                <tr>
                    <th scope="row">{{ $participacion->id }}</th>
                    <td>{{ $participacion->nombre_evento }}</td>
                    <td>{{ $participacion->nombre_equipo }}</td>
                    <td>{{ $participacion->resultado }}</td> 
                    <td>{{ $participacion->premios }}</td> 
                    <td> 
                    <a href="{{route('participaciones.edit', ['participacion'=> $participacion->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('participaciones.destroy' , ['participacion' => $participacion->id])}}"
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
   </x-app-layout>
</html> 