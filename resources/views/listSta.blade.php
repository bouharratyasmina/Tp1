<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" width="50%">
        <tr><a href="/form">Create</a></tr>
       <tr><th>List des Stagiaires :</th></tr>
       <tr>
        <th>Nom</th>
        <th>PreNom</th>
        <th>Email</th>
       </tr>
      

       @foreach($stagiaires as $value)
       <tr>
       <td>
           {{$value["nom"]}}
       </td>
       <td>
        {{$value["prenom"]}}
    </td>
    <td>
        {{$value["email"]}}
    </td>
       <td><button>Supprimer</button></td>
       <td><button><a href="/modify">modifier</a></button></td>
       </tr>
       
       @endforeach
</table>
</body>
</html>