<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //LIST
    public function index(){
        $this->usuario =  new Usuario();
        // return response()->json($this->usuario->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra usuarios que recebe um array associativo.
        return view('usuarios',['usuarios'=>$this->usuario->all()]);
    }

    public function show($id) {
        // $this->usuario = new Usuario();
        // return view('usuario', ['usuario'=>$this->usuario->find($id)]);
        //$usuario = usuario::find($id); // Assim acessa de form a statica
        return view('usuario', ['usuario'=>Usuario::find($id)]);
    }
    //CREATE
    public function create(){
        return view('usuario_create');//Nome do arquivo na view, sem a extensão
    }

    public function store(Request $request) {// CREATE usuario

        $newUsuario = $request->all(); // tras todos os dados da requisição
        // dd($newUsuario); // Uso para ver se  esta chegando os dados.
        if(Usuario::create($newUsuario))
            return redirect('/usuarios');
        else dd('Erro ao cadastrar usuário');
    }
    //EDIT
    public function edit($id){
        return view('usuario_edit',['usuario'=>Usuario::find($id)]);
    }

    public function update(Request  $request, $id){
        $updatedUsuario = $request->all();
        if(!Usuario::find($id)->update($updatedUsuario))
            dd("Erro ao atualizar o usuário $id !");
        return redirect('/usuarios');
    }
     // DELETE
     public function delete($id){
        return view('usuario_remove',['usuario'=>Usuario::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar === 'Deletar')
            if(!Usuario::destroy($id))
                dd("Erro ao deletar usuário $id !");
        return redirect('/usuarios');

    }
}
