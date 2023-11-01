<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
        <div class="col s12">
            <h1>Inscription</h1>

            
            <hr>
            
        <form action="/inscrire/traitement" method="POST">

        @csrf
            <div class="mb-3">
                <label for="NomUtil" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="nomUtil" name="nomUtil">
            </div>
            <span class="text-danger">@error('nomUtil'){{$message}} @enderror</span>

            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp">
            </div>
            <span class="text-danger">@error('mdp'){{$message}} @enderror</span>

            <br>
            <button type="submit" class="btn btn-primary">M'inscrire</button>
            <br></br>

            <a href="/connexion" class="btn btn-danger">Revenir a la page de connexion</a>
        </form>

        </div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>