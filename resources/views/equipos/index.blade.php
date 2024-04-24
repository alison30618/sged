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

    <title>Listado de Equipos</title>
  </head>
  <body>
    <div class="container">
      <h1>Listado de Equipos</h1>
      <a href="{{route('equipos.create')}} " class="btn btn-success">Add</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Deporte</th>
                    <th scope="col">Entrenador</th> 
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($equipos as $equipo)
                <tr>
                    <th scope="row">{{ $equipo->id }}</th>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->deporte }}</td>
                    <td>{{ $equipo->entrenador }}</td>   
                    <td>
                    <a href="{{route('equipos.edit', ['equipo'=> $equipo->id])}}" class="btn btn-info">Edit</a>
                    <form action="{{route('equipos.destroy' , ['equipo' => $equipo->id])}}"
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