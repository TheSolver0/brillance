<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
</head>
<body>



    <script>
        $(document).ready(function() {
            let table = new DataTable('#listecandidats', {
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/2.0.3/i18n/fr-FR.json',
                },
            });
        });
    </script>
</body>
<header class="head head-soft">

    <table id="listecandidats">
        <thead>
            <td>Id</td>
            <td>Nom</td>
            <td>Age</td>
            <td>Categorie</td>
            <td>Code</td>
            <td>Votes</td>
            <td>Lien</td>
        </thead>
        @forelse ($candidats as $candidat)
            <tr>
                <td>{{ $candidat->id }}</td>
                <td>{{ $candidat->name }}</td>
                <td>{{ $candidat->age }}</td>
                <td>{{ $candidat->categorie }}</td>
                <td>{{ $candidat->code }}</td>
                <td>{{ $candidat->votes }}</td>
                <td>{{ $candidat->lien }}</td>
            </tr>
        @empty

        @endforelse
    </table>
</header>

</html>
