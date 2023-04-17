<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="{{asset('layout/css/create.css')}}">

    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>teste</h1>
        
        <div class="card">
            <div class="img">
            <img src="{{asset('layout/css/img/macho-de-conceito-de-empresario-usando-ilustracao-plana-de-laptop_5586-388.jpg')}}" alt="">
        </div>
        <form action="{{ route('pessoa.update',['id'=>$pessoas->id])}}" method="POST">
          @csrf
          @method('PUT')
            <div class="form-group">
              <label for="nome">Nome:</label>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite nome" value="{{$pessoas->nome}}">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Digite email" value="{{$pessoas->email}}">
            </div>
            <div class="btnclass">
            <button type="submit" class="btn btn-primary">Enviar</button>
             </div>

       
          </form>
        </div>
    </div>
</body>
</html>