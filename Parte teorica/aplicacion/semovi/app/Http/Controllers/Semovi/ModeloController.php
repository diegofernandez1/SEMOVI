<?php

namespace App\Http\Controllers\Semovi;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\semovi\Marca;
use App\Models\semovi\Modelo;
use App\Models\semovi\Motor;

use App\Models\semovi\Vehiculo;
use Laravel\Ui\Presets\React;
use Response;
use Illuminate\Support\Carbon;
class ModeloController extends AppBaseController
{
    public function index(Request $request){

        return view('semovi.modelo.index')
         ->with('marcas',$this->getMarcas());
    }
    public function getMarcasSelect(){
        $marcas= Marca::all();

        foreach($marcas as $marca){
            $data[$marca->id]=$marca->id.' '.$marca->nombre;
        }
        return $data;
    }
    public function getMarcas(){
        return Modelo::with(['idMarca'])->get();
    }
    public function crearModelo(Request $request){
        return view('semovi.modelo.create')
        ->with('marcas',$this->getMarcasSelect());
    }
    public function verModelo(Request $request){
        $modelo=Modelo::with(['idMarca'])->where('id',$request->idModeloVer)->first();
        return view('semovi.modelo.view')
        ->with('modelo',$modelo);
    }
    public function saveModelo(Request $request){

        $id=Modelo::count('id');
        $id+=1;
        Modelo::create(
            ['id'=>$id,'id_marca'=>$request->nomMarcaCreate,'nombre_modelo'=>$request->nomModeloCreate]
        );
        return view('index');
    }

}
