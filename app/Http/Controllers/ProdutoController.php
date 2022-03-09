<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $produto;
    // LIST
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
    // CREATE
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
    // EDIT
    public function edit($id){
        return view('produto_edit',['produto'=>Produto::find($id)]);
    }

    public function update(Request  $request, $id){
        $updatedProduto = $request->all();
        $updatedProduto['importado'] = ($request->importado) ? true : false;
        if(!Produto::find($id)->update($updatedProduto))
            dd("Erro ao atualizar o produto $id !");
        return redirect('/produtos');
    }
    // DELETE
    public function delete($id){
        return view('produto_remove',['produto'=>Produto::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar === 'Deletar')
            if(!Produto::destroy($id))
                dd("Erro ao deletar produto $id !");
        return redirect('/produtos');

    }
}
