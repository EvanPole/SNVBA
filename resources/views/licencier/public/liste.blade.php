{{-- XX lister les licencier --}}
{{-- XX pouvoir filtrer par catégorie (mineur/majeur) --}}
{{-- pouvoir supprimer les mineurs --}}
{{-- gestion des status des licencier --}}

<style>
    body {
        color: white !important;
    }
</style>
<x-app-layout>
    <div class="container mx-auto px-4">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="filterBy('mineur')">Mineur</button>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
            onclick="filterBy('majeur')">Majeur</button>
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th scope="col" class="px-4 py-2">Nom</th>
                    <th scope="col" class="px-4 py-2">Prénom</th>
                    <th scope="col" class="px-4 py-2">Date de naissance</th>
                    <th scope="col" class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody id="personList">
                <!-- Cette liste sera mise à jour en JavaScript -->
                @foreach ($licenciernv as $item)
                    <tr class="person">
                        <td class="border px-4 py-2">{{ $item->name }}</td>
                        <td class="border px-4 py-2">{{ $item->lastname }}</td>
                        <td class="border px-4 py-2">{{ $item->birthdate }}</td>
                        <td class="border px-4 py-2">
                            @if ( Auth::user()->permission < 1)
                            @php
                                $birthdate = new DateTime($item->birthdate);
                                $age = $birthdate->diff(new DateTime('now'))->y;
                            @endphp
                            @if ($age < 18)
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                    onclick="deleteUser('{{ $item->id }}')">Supprimer</button>
                            @endif
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

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

        function deleteUser(userId) {
            if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
                fetch('/licencier/' + userId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }).then(response => {
                    if (response.ok) {
                        window.location.reload(); // Actualiser la page après la suppression
                    } else {
                        alert('Erreur lors de la suppression de l\'utilisateur.');
                    }
                });
            }
        }
    </script>
</x-app-layout>
