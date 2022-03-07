<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pet;

class PetController extends Controller
{
    public function index(){
        $this->pet =  new Pet();
        // return response()->json($this->produto->all()); // TIPO JSON
                //nome da view, 2º Array no qual posso passar mais de uma variavel.
                                //no caso passo a palavra produtos que recebe um array associativo.
        return view('pets',['pets'=>$this->pet->all()]);
    }

    public function show(Request $request, $id) {
        $this->pet = new Pet();
        return view('pet', ['pet'=>$this->pet->find($id)]);
    }
}
