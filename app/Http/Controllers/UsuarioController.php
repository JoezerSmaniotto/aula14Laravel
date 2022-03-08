<?php

namespace App\Http\Controllers;

use App\Models\Usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $this->usuario =  new Usuario();
        // return response()->json($this->produto->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra produtos que recebe um array associativo.
        return view('usuarios',['usuarios'=>$this->usuario->all()]);
    }

    public function show($id) {
        // $this->usuario = new Usuario();
        // return view('usuario', ['usuario'=>$this->usuario->find($id)]);
        //$produto = Produto::find($id); // Assim acessa de form a statica
        return view('usuario', ['usuario'=>Usuario::find($id)]);
    }
}
