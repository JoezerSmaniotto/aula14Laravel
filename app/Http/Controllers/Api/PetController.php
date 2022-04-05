<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PetRequest;
use App\Models\Pet;
use Illuminate\Http\Request;
use Exception;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $perPage = $request->query('per_page');
        $petPaginated = Pet::paginate($perPage);
        $petPaginated->appends([
            'per_page'=>$perPage
        ]);
        return response()->json($petPaginated);
        // return Pet::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PetRequest $request)
    {
        try {
            return response()->json([
                'Message' => 'Pet criado com sucesso!',
                'Pet' => Pet::create($request->post())
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível criar novo Pet',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        try{
            return $pet;
        }catch(Exception $error){
            return response()->json([
            "Message" =>"Pet não encontrado!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        try {
            $pet->update($request->all());
            return response()->json([
                'Message' => 'Pet atualizado com sucesso!',
                'Pet'=>$pet
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível atualizar o pet!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet)
    {
        try{
            if($pet->delete()){
                return response()->json([
                    "Message" =>"Pet removido!",
                    "Pet" => $pet
                ]);
                throw new Exception("Erro ao deletar Pet !");
            }
        }catch(Exception $error){
            return response()->json([
                "Message" =>"Pet removido!",
                "Pet" => $error->getMessage()
            ]);

        }
    }

    public function listUsuario(Pet $pet)
    {
        return response()->json($pet->load('users'));
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
