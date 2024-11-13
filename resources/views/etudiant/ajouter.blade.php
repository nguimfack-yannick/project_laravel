<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MON PREMIER PROJECT LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
          <div class="col s12">
            <h1>AjOUTER UN ETUDIANTS</h1>
            <hr>
            @if(@session('status'))
            <div class="alert alert-succes">
                {{session('statut') }}
            </div>
            @endif

        <ul>
            @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
                
            @endforeach
        </ul>
<form action="/ajouter/traitement" method="POST" name="nom">
    @csrf

    <div class="form-group">
      <label for="Nom">Nom</label>
      <input type="text" class="form-control" id="Nom" name="nom">
    </div>
    <div class="form-group">
      <label for="Prenom">Prenom</label>
      <input type="text" class="form-control" id="Prenom" name="prenom">
    </div>
    <div class="form-group">
      <label for="Classe">Classe</label>
      <input type="text" class="form-control" id="Classe" name="classe">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
    <br><br>
    <a class="btn btn-danger" href="/etudiant">Revenir a la liste des etudiants</a>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>