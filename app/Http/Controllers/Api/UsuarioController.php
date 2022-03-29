<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            return response()->json([
                'Message' => 'Usuário criado com sucesso!',
                'Usuario' =>  Usuario::create($request->post())
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível criar novo Usuário!',
                "Exception"=>$error->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        try{
            return $usuario;
        }catch(Exception $error){
            return response()->json([
            "Message" =>"Usuário não encontrado!"
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        try {
            $usuario->update($request->all());
            return response()->json([
                'Message' => 'Usuário atualizado com sucesso!',
                'Usuario'=>$usuario
            ]);
        } catch (Exception $error) {
            return response()->json([
                "Erro" => 'Não foi possível atualizar o Usuario!',
                "Exception"=>$error->getMessage()
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        try{
            if($usuario->delete()){
                return response()->json([
                    "Message" =>"Usuário removido!",
                    "Usuario" => $usuario
                ]);
                throw new Exception("Erro ao deletar Usuario !");
            }
        }catch(Exception $error){
            return response()->json([
                "Message" =>"Usuario removido!",
                "Usuario" => $error->getMessage()
            ]);

        }
    }

    public function listPets(Usuario $usuario)
    {
        return response()->json($usuario->load('pets'));
    }
}
