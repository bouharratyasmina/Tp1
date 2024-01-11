<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Stagiaire</title>
</head>
<body>
    <fieldset>
        <legend>Add Stagiaire</legend>
        <!-- Update the form method to POST and include the _method field -->
        <form action="{{ route('stagiaires.store') }}" method="POST">
            @csrf
            <!-- Laravel's method_field helper to simulate the PUT request -->
            <table style="height: 200px">
                <tr>
                    <td><label>Nom:</label></td>
                    <td><input type="text" name="nom"></td>
                    @error("nom")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </tr>
                <tr>
                    <td><label>PreNom:</label></td>
                    <td><input type="text" name="prenom"></td>
                </tr>
                @error("prenom")
                <div>
                    {{$message}}
                </div>
                @enderror
                <tr>
                    <td><label>Email:</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                @error("email")
                <div>
                    {{$message}}
                </div>
                @enderror
                <tr>
                    <td><label>Phone Number:</label></td>
                    <td><input type="number" name="phone"></td>
                </tr>
                <tr>
                    <td><button type="submit">Ajouter</button></td>
                </tr>
                @error("phone")
                <div>
                    {{$message}}
                </div>
                @enderror
            </table>
        </form>
    </fieldset>
</body>
</html>
