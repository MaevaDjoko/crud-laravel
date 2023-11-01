<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD in Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container text-center">
        <div class="row">
        <div class="col s12">
            <h1>CRUD in Laravel</h1>
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Classe</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudiants as $etudiant)
                    <tr>
                        <td>{{$etudiant->id}}</td>
                        <td>{{$etudiant->nom}}</td>
                        <td>{{$etudiant->prenom}}</td>
                        <td>{{$etudiant->classe}}</td>
                        <td><img src="{{ asset('uploads/' . $etudiant->photo) }}" alt="photo" width="100px;" height="100px;" ><td>
                        <td>
                            <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                            <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>

                        </td>
                    </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>