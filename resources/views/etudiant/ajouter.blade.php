



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
            <h1>Ajouter un etudiant</h1>

            
            <hr>
            
        <form action="/ajouter/traitement" method="POST">

        @csrf
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
            <div class="mb-3">
                <label for="Classe" class="form-label">Classe</label>
                <input type="text" class="form-control" id="classe" name="classe">
            </div>
            <div class="mb-3">
                <label for="photo" >Photo</label>
                <input type="file" id="photo" name="photo" >
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Ajouter un etudiant</button>
            <br></br>

            <a href="/etudiant" class="btn btn-danger">Revenir a la liste des etudiants</a>
        </form>

        </div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>