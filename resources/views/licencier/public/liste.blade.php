
{{-- XX lister les licencier --}}
{{-- XX pouvoir filtrer par catégorie (mineur/majeur) --}}
{{-- pouvoir supprimer les mineurs --}}
{{-- gestion des status des licencier --}}


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
    body{
        background: black;
        color: white;
    }
</style>
<body>
    <div class="container">
        <button onclick="filterBy('mineur')">Mineur</button>
        <button onclick="filterBy('majeur')">Majeur</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Date de naissance</th>
                </tr>
            </thead>
            <tbody id="personList">
                <!-- Cette liste sera mise à jour en JavaScript -->
                @foreach ($licenciernv as $item)
                <tr class="person">
                    <td>{{$item->name}}</td>
                    <td>{{$item->lastname}}</td>
                    <td>{{$item->birthdate}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function filterBy(category) {
            const persons = document.getElementsByClassName('person');
            for (let person of persons) {
                const birthdateStr = person.getElementsByTagName('td')[2].innerText;
                const birthdate = new Date(birthdateStr);
                const age = calculateAge(birthdate);
                if (category === 'mineur') {
                    if (age >= 18) {
                        person.style.display = 'none';
                    } else {
                        person.style.display = '';
                    }
                } else if (category === 'majeur') {
                    if (age < 18) {
                        person.style.display = 'none';
                    } else {
                        person.style.display = '';
                    }
                }
            }
        }

        function calculateAge(birthdate) {
            const today = new Date();
            const diff = today - birthdate;
            const ageDate = new Date(diff);
            return Math.abs(ageDate.getUTCFullYear() - 1970);
        }
    </script>
</body>
</html>
