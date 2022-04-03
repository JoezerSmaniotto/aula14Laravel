<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
use Exception;

class ProdutoController extends Controller
{
    public function index(Request $request){
        $perPage = $request->query('per_page');
        $produtosPaginated = Produto::paginate($perPage);
        $produtosPaginated->appends([
            'per_page'=>$perPage
        ]);
        return response()->json($produtosPaginated);
    }

    public function show($id){
        try {
            $prod = Produto::find($id);
            if(!$prod){
                throw new Exception("ERRO !!");
            }
            return response()->json($prod);
        } catch (Exception $error) {

            $messageError=[
                'Erro'=>"O produto não encontrado com id: $id!",
                'Exception'=>$error->getMessage()
            ];
            $statusCode=500;
            return response( $messageError, $statusCode);
            // $message = "O produto não encontrado com id:$id!";
            // return $this->errorMessage($error, $message, 404,true);
        }
    }


    public function store(ProdutoRequest $request){
        try {
            // $request->validate([
            // ]);
            $newProduto = $request->post();
            $newProduto['importado'] = ($request->importado) ? true : false;
            $storedProtudo = Produto::create($newProduto);
            return response()->json([
                'message' => 'Produto criado com sucesso!',
                'produto' => $storedProtudo
            ]);
        } catch (Exception $error) {
            $message = 'Erro ao inserir o novo Produto!';
            return $this->errorMessage($error, $message, 500, false);
        }
    }


    public function update(Request $request, $id){
        try{
            $newProduto = Produto::findOrFail($id);
            $newProduto->update($request->all());// Se deu certo não retorna o produto atulizado
            return response()->json([   // ele apenas vai retornar um true se certo, ou false errado
                "Message"=>"Produto atualizado com sucesso!",
                "Produto"=>$newProduto
            ]);
        }catch(Exception $error){
            $message = 'Erro ao atualizar o novo Produto!';
            return $this->errorMessage($error, $message, 500, true);
        }
    }

    public function delete($id) {
        try {
            if(Produto::findOrFail($id)->delete())
                return response()->json([
                    "Message"=>"Produto id:$id removido com sucesso!"
                ]);
            throw new Exception("Não foi possível remover produto!");
        } catch (Exception $error) {
            $message = "O produto não encontrado com id:$id!";
            return $this->errorMessage($error, $message, 404);
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
