<x-app-layout>
    <style>
        body{
            color: white !important;
        }
        </style>
    <div class="container mx-auto px-4">
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th scope="col" class="px-4 py-2">Nom</th>
                    <th scope="col" class="px-4 py-2">Prénom</th>
                    <th scope="col" class="px-4 py-2">Date de naissance</th>
                    <th scope="col" class="px-4 py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($licenciernv as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->name }}</td>
                    <td class="border px-4 py-2">{{ $item->lastname }}</td>
                    <td class="border px-4 py-2">{{ $item->birthdate }}</td>
                    <td class="border px-4 py-2">
                        <form id="inscriptionForm{{ $item->id }}" action="/inscription/{{ $item->id }}" method="POST">
                            @method('PUT')
                            @csrf
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Valider
                                l'inscription</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</x-app-layout>
