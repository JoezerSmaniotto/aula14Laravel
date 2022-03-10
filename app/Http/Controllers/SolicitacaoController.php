<?php

namespace App\Http\Controllers;

use App\Models\Solicitacao;
use Illuminate\Http\Request;


class SolicitacaoController extends Controller
{
    //LIST
    public function index(){
        $this->solicitacao =  new Solicitacao();
        // return response()->json($this->usuario->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra usuarios que recebe um array associativo.
        return view('solicitacoes',['solicitacoes'=>$this->solicitacao->all()]);
    }

    public function show($id) {
        // $this->usuario = new Usuario();
        // return view('usuario', ['usuario'=>$this->usuario->find($id)]);
        //$usuario = usuario::find($id); // Assim acessa de form a statica
        return view('solicitacao', ['solicitacao'=>Solicitacao::find($id)]);
    }
    //CREATE
    public function create(){
        return view('solicitacao_create');//Nome do arquivo na view, sem a extensão
    }

    public function store(Request $request) {// CREATE usuario

        $newSolicitacao = $request->all(); // tras todos os dados da requisição
        $newSolicitacao['aceita']=($request->aceita)?true:false; // validação
        // dd($newSolicitacao); // Uso para ver se  esta chegando os dados.
        if(Solicitacao::create($newSolicitacao))
            return redirect('/solicitacoes');
        else dd('Erro ao cadastrar solicitação');
    }
    //EDIT
    public function edit($id){
        return view('solicitacao_edit',['solicitacao'=>Solicitacao::find($id)]);
    }

    public function update(Request  $request, $id){
        $updatedSolicitacao = $request->all();
        $updatedSolicitacao['aceita']=($request->aceita)?true:false;
        if(!Solicitacao::find($id)->update($updatedSolicitacao))
            dd("Erro ao atualizar a solicitação $id !");
        return redirect('/solicitacoes');
    }
    //DELETE
    public function delete($id){
        return view('solicitacao_remove',['solicitacao'=>Solicitacao::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar === 'Deletar')
            if(!Solicitacao::destroy($id))
                dd("Erro ao deletar solicitações $id !");
        return redirect('/solicitacoes');

    }
}
