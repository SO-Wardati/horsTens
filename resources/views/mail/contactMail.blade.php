<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Message mail</title>
</head>
<body>
    <p>Message de :{{$data['name'] }}</p>
    <p>Adresse email du contact: {{$data['email']}}</p><
    <p>Téléphone:{{$data['phonenumber']}}</p>
    <p>Message:{{$data['message']}} </p>
</body>
</html>
