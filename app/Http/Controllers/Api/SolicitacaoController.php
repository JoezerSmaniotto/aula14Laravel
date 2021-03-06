<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SolicitacaoRequest;
use App\Models\Solicitacao;
use Illuminate\Http\Request;
use Exception;

class SolicitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $solicitacaoPaginated = Solicitacao::paginate($perPage);
        $solicitacaoPaginated->appends([
            'per_page'=>$perPage
        ]);
        return response()->json($solicitacaoPaginated);
        //return Solicitacao::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SolicitacaoRequest $request)
    {
        try {
            return response()->json([
                'Message' => 'Solicitação criado com sucesso!',
                'Solicitacao' => Solicitacao::create($request->post())
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível criar uma nova Solicitação!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitacao $solicitacao)
    {
        try{
            return $solicitacao;
        }catch(Exception $error){
            return response()->json([
            "Message" =>"Solicitação não encontrado!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitacao $solicitacao)
    {
        try {
            $solicitacao->update($request->all());
            return response()->json([
                'Message' => 'Solicitação atualizado com sucesso!',
                'Solicitacao'=>$solicitacao
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível atualizar sua solicitação!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitacao  $solicitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitacao $solicitacao)
    {
        try{
            if($solicitacao->delete()){
                return response()->json([
                    "Message" =>"Solicitação removido!",
                    "Solicitação" => $solicitacao
                ]);
                throw new Exception("Erro ao deletar Solicitação !");
            }
        }catch(Exception $error){
            return response()->json([
                "Message" =>"Solicitação removida!",
                "Solicitacao" => $error->getMessage()
            ]);

        }
    }

    private function errorMessage($error, $message, $statusHttp, $trace = false){

        $messageError=[
            'Erro'=> $message,
            'Exception'=>$error->getMessage(),
            'Debug'=> $error
        ];
        $statusHttp = $error->status ?? $statusHttp ?? 500;
        $trace && $messageError['Trace'] = $error->getTrace();
        return response( $messageError, $statusHttp);
    }
}
