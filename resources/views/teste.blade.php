<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- <button><a href="{{ route('jogos') }}">HOME</a></button> --}}

   <?php 
        $nome =  $_POST['nome']; 
        $idade =  $_POST['idade']; 
    ?>

    <h1>Olá {{$nome}}, atualmente você tem {{$idade}} anos</h1>
</body>
</html>