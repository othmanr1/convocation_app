<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1em;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 0.5em;
        }
        th {
            background-color: #eee;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>{{ $title }}</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Departement</th>
                <th>Periode</th>
                <th>Ecole</th>
                <th>Etat</th>
                <th>Another</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->departement }}</td>
                <td>{{ $user->periode }}</td>
                <td>{{ $user->ecole }}</td>
                <td>{{ $user->etat }}</td>
                <td>{{ $user->another }}</td>
            </tr>
        </tbody>
    </table> 

    <img src="{{ asset('background/ocp.svg')}} " width="100px" heigh="100px" alt="">
    <p>le responsable support et Coordination de khouribga du Groupe OCP certifieque </p>
</body>
</html>