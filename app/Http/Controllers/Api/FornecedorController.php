<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FornecedorRequest;
use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Exception;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $fornecedorPaginated = Fornecedor::paginate($perPage);
        $fornecedorPaginated->appends([
            'per_page'=>$perPage
        ]);
        return response()->json($fornecedorPaginated);
        // return Fornecedor::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FornecedorRequest $request)
    {
        try {
            return response()->json([
                'Message' => 'Fornecedor criado com sucesso!',
                'Fornecedor' => Fornecedor::create($request->post())
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível criar novo Produto!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        try{
            return $fornecedor;
        }catch(Exception $error){
            return response()->json([
            "Message" =>"Fornecedor não encontrado!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedor $fornecedor)
    {
        // return response()->json(($request->post()));
        try {
            $fornecedor->update($request->all());
            // return response()->json(($fornecedor));
            return response()->json([
                'Message' => 'Fornecedor atualizado com sucesso!',
                'Fornecedor'=>$fornecedor
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível atualizar o fornecedor!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedor $fornecedor)
    {
        try{
            if($fornecedor->delete()){
                return response()->json([
                    "Message" =>"Fornecedor removido!",
                    "Fornecedor" => $fornecedor
                ]);
                throw new Exception("Erro ao deletar Fornecedor !");
            }
        }catch(Exception $error){
            return response()->json([
                "Message" =>"Fornecedor removido!",
                "Fornecedor" => $error->getMessage()
            ]);

        }
    }


    public function listProdutos(Fornecedor $fornecedor)
    {
        return response()->json($fornecedor->load('produtos'));
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
