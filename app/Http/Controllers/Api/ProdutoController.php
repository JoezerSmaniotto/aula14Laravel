<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(){
        return response()->json(Produto::all());
    }

    public function show($id){
        try {
            return response()->json(Produto::findOrFail($id));
        } catch (Exception $error) {
            $messageError=[
                'Erro'=>"O produto não encontrado com id: $id!",
                'Exception'=>$error->getMessage()
            ];
            $statusCode=404;
            return response( $messageError, $statusCode);
            // $message = "O produto não encontrado com id:$id!";
            // return $this->errorMessage($error, $message, 404,true);
        }
    }
}
