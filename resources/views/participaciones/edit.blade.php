<!doctype html>
<html lang="en">
  <head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit participacion</title>
  </head>
  <body>
    <div class="container">
        <h1>Edit participacion</h1>
        <form method="POST" action="{{route('participaciones.update' , ['participacion' => $participacion->id])}}">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="code" disabled="disabled" value="{{$participacion->id}}">
                <div id="idHelp" class="form-text">participacion Id</div>
            </div> 
            <div class="mb-3">
                <label for="artista">equipo:</label>
                <select class="form-select" name="equipo" id="equipo" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($equipos as $equipo)
                    @if($equipo->id == $participacion->equipo_id)
                        <option selected value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                    @else
                        <option value="{{$equipo->id}}">{{$equipo->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="artista">evento:</label>
                <select class="form-select" name="evento" id="evento" required>
                    <option selected disabled value="">Choose one...</option>
                    @foreach ($eventos as $evento)
                    @if($evento->id == $participacion->evento_id)
                        <option selected value="{{$evento->id}}">{{$evento->nombre}}</option>
                    @else
                        <option value="{{$evento->id}}">{{$evento->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div> 
            
            <div class="mb-3">
                <label for="name" class="form-label">Resultado:</label>
                <input type="text" required class="form-control" id="resultado" aria-describedby="nameHelp" name="resultado"  value="{{$participacion->resultado}}">
            </div>
            
            <div class="mb-3">
                <label for="name" class="form-label">Premios:</label>
                <input type="text" required class="form-control" id="premios" aria-describedby="nameHelp" name="premios"   value="{{$participacion->premios}}">
            </div> 
            
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('participaciones.index')}}" class="btn btn-warning">Cancel</a>
            </div>
            
        </form>
    </div>  
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

   
  </body>
</html>