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

    public function show($id) {
    // public function show(Request $request, $id) {
        // $this->produto = new Produto();
        // return view('produto', ['produto'=>$this->produto->find($id)]);
        return view('produto', ['produto'=>Produto::find($id)]);
    }

    public function create(){
        return view('produto_create');//Nome do arquivo na view, sem a extensão
    }

    public function store(Request $request) {// CREATE PRODUTO

        $newProduto = $request->all(); // tras todos os dados da requisição
        $newProduto['importado']=($request->importado)?true:false; // validação
        // dd($newProduto); // Uso para ver se  esta chegando os dados.
        if(Produto::create($newProduto))
            return redirect('/produtos');
        else dd('Erro ao cadastrar produto');

    }
}
