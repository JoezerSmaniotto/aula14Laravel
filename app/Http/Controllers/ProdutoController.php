<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;

    public function index(){
        $this->produto =  new Produto();
        // return response()->json($this->produto->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra produtos que recebe um array associativo.
        return view('produtos',['produtos'=>$this->produto->all()]);
    }

    public function show(Request $request, $id) {
        $this->produto = new Produto();
        return view('produto', ['produto'=>$this->produto->find($id)]);
    }
}
