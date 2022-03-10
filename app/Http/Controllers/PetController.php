<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index(){
        $this->pet =  new Pet();
        // return response()->json($this->pet->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra pet que recebe um array associativo.
        return view('pets',['pets'=>$this->pet->all()]);
    }

    public function show(Request $request, $id) {
        $this->pet = new Pet();
        return view('pet', ['pet'=>$this->pet->find($id)]);
    }

    public function create(){
        return view('pet_create');//Nome do arquivo na view, sem a extensão
    }

    public function store(Request $request) {// CREATE Pet

        $newPet = $request->all(); // tras todos os dados da requisição
        $newPet['adotado']=($request->adotado)?true:false; // validação
        //dd($newPet); // Uso para ver se  esta chegando os dados.
        if(Pet::create($newPet)){
            echo "CRIEI PET";
            return redirect('/pets');
        }
        else dd('Erro ao cadastrar pet');

    }
     // EDIT
     public function edit($id){
        return view('pet_edit',['pet'=>Pet::find($id)]);
    }

    public function update(Request  $request, $id){
        $updatedPet = $request->all();
        $updatedPet['adotado'] = ($request->adotado) ? true : false;
        if(!Pet::find($id)->update($updatedPet))
            dd("Erro ao atualizar o pet $id !");
        return redirect('/pets');
    }
     // DELETE
     public function delete($id){
        return view('pet_remove',['pet'=>Pet::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar === 'Deletar')
            if(!Pet::destroy($id))
                dd("Erro ao deletar pet $id !");
        return redirect('/pets');

    }
}
