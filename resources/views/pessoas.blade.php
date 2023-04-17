@extends('layout.index')
@section('title', 'Pessoas')

@section('content')
<link rel="stylesheet"  type="text/css" href="{{asset('layout/css/app.css')}}">


 <h1 class="txt">Treinando html e css</h1>

 <div class="container">
    <table class="table">
        <thead  class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach($pessoas as $pessoa)
            <tr>              
            <td>{{ $pessoa->id}}</td> 
            <td>{{ $pessoa->nome}}</td>
            <td>{{ $pessoa->email}}</td>
            <td class="d-flex">
              <a href="{{ route('pessoa.edit',['id'=>$pessoa->id])}}" class="btn btn-success me-2">EDITAR</a>
              <form action="{{ route('pessoa.destroy',['id'=>$pessoa->id])}}" method="POST">
                @csrf
                @method('DELETE')
              <button type="submit" class="btn btn-danger">EXCLUIR</button>
            </form>
            </td>
        </tr>
        @endforeach
        </tbody>
      </table>
</div>
@endsection
