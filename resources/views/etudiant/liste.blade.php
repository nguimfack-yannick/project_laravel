<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MON PREMIER PROJECT LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">
        <div class="row">
          <div class="col s12">
            <h1>MON PREMIER PROJECT LARAVEL </h1>
            <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
            <hr>
            @if(session('status'))
            <div class="alert alert-succes">
                {{session('statut') }}
            </div>
            @endif
            <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Classe</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $ide = 1;
            @endphp
            @foreach($etudiants as $etudiant)
            <tr> 
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->classe}}</td>
               
                <td>
                    <a href="/update-etudiant/{{ $etudiant->id}}" class="btn btn-info">Update</a>
                    <a href="/delete-etudiant/{{ $etudiant->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @php
            $ide +=1;
            @endphp
            
            @endforeach
        </tbody>
            </table>
            {{$etudiants->links()}}
          </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>