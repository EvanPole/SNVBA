<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Liens vers les fichiers CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    boby{
        background: black;
        color: white
    }
</style>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($licenciernv as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->lastname}}</td>
                    <td>{{$item->birthdate}}</td>
                    <td>
                        <form id="inscriptionForm{{$item->id}}" action="/inscription/{{$item->id}}" method="POST">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-primary" >Valider l'inscription</button>
                      
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
