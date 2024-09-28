<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    


    <div class="container text-center">
    <div class="row">
        <div class="col s12">   
             <h1>CRUD ETUDIANTS</h1>
             <hr>
            <a href="/ajouter" class="btn btn-primary">Ajouter un etudiant</a>
             </hr>
            <table class="table ">
               <Thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Classe</th>
                    <th>Actions</th>
                </tr>
               </Thead>
               <tbody>
                @foreach ($etudiants as $etudiant)
                    
                <tr>
                    <td>{{$etudiant->id}}</td>
                    <td>{{$etudiant->nom}}</td>
                    <td>{{$etudiant->prenom}}</td>
                    <td>{{$etudiant->classe}}</td>
                    <td><a href="/update-etudiant{{{{$etudiant->id}}}}" class="btn btn-info">Update</a>
                        <a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>