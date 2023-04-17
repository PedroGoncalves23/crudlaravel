<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pessoa;

use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index() {
    //    $nome = "Pedro Henrique";

       $pessoas = Pessoa::all();
       return view('pessoas',['pessoas'=>$pessoas]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
             // Definição das regras
        $rules = [
            'nome' => 'required|min:3',
            'email' => 'required|email',
        ];
        $messages = [
            'nome.required' => 'Nome Obrigatório!',
              'email.required' => 'Email Obrigatório!',
              'email.email' => 'Digite um email válido',
              
        ];
        // Validação da Request   
        $request->validate($rules, $messages);


        Pessoa::create($request->all());
        return redirect()->route('pessoa.index');
    }

    public function edit($id)
    {
        $pessoa = Pessoa::where('id', $id)->first();
        if(!empty($pessoa) ){
            return view('edit',['pessoas'=>$pessoa]);
        }
        return redirect()->route('pessoa.index');
 
    }

    public function update(Request $request, $id)
    {
        $valores = [
            'nome' => $request->nome,
            'email' => $request->email,
        ];

        Pessoa::where('id', $id)->update($valores);
        return redirect()->route('pessoa.index');
    }

    public function destroy($id) {
        Pessoa::where('id', $id)->delete($id);
        return redirect()->route('pessoa.index');

    }

    public function sorteio()
    {
        $pessoas = Pessoa::all();
        return view('sorteio',['pessoas'=>$pessoas]);
    }

}
