<?php

namespace App\Http\Controllers\Semovi;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\semovi\AgenteTransito;
use App\Models\semovi\Articulo;
use App\Models\semovi\Direccion;
use App\Models\semovi\Infraccion;
use App\Models\semovi\Licencia;
use App\Models\semovi\Marca;
use App\Models\semovi\Modelo;
use App\Models\semovi\Motor;
use App\Models\semovi\Persona;
use App\Models\semovi\Vehiculo;
use App\Models\semovi\Propietario;
use App\Models\semovi\TenerPropietarioVehiculo;
use App\Models\semovi\UbicarDireccionMarca;
use Laravel\Ui\Presets\React;
use Response;
use Illuminate\Support\Carbon;
class MarcaController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.marca.index')
        ->with('marcas_direccion',$this->getMarcas());
    }
    public function getMarcas(){
        return UbicarDireccionMarca::with(['idMarca','idDireccion'])->get();
    }
    public function getDirecciones(){
        $getDirecciones= Direccion::all();
        foreach($getDirecciones as $direccion){
            $direcciones[$direccion->id]='Calle: '.$direccion->calle.' '.$direccion->num_ext.' Int.'.$direccion->num_int.
                        ' Asent. '.$direccion->asentamiento.' Municipio: '.$direccion->municipio.' Estado: '.$direccion->estado.
                        ' CP. '.$direccion->codigo_postal;
        }
        return $direcciones;
    }
    public function crearMarca(Request $request){
        return view('semovi.marca.create')
        ->with('direcciones',$this->getDirecciones());
    }
    public function editarMarca(Request $request){
        $marca= UbicarDireccionMarca::with(['idMarca','idDireccion'])->where('id',$request->idMarcaDirEditar)->first();
        return view('semovi.marca.edit')
        ->with('marca',$marca)
        ->with('direcciones',$this->getDirecciones());
    }
    public function saveMarcaEdit(Request $request){
        Marca::where('id',$request->idMarcaEdit)->update(['nombre'=>$request->nombreMarcaEdit]);

        if($request->nuevaDireccionMarca==0){
            $id=Direccion::count('id');
            $id+=1;
            Direccion::create(
                ['id'=>$id,'calle'=>$request->calleDirMarcaEdit,'num_int'=>$request->numIntDirMarca,'num_ext'=>$request->numExtDirMarcaEdit,
                'asentamiento'=>$request->asentamientoDirMarcaEdit,'municipio'=>$request->municipioDirMarcaEdit,'estado'=>$request->estadoDirMarcaEdit,
                'codigo_postal'=>$request->cpDirMarcaEdit]
            );
            $id_ubicar=UbicarDireccionMarca::count('id');
            $id_ubicar+=1;
            UbicarDireccionMarca::create(
                ['id'=>$id_ubicar,'id_direccion'=>$id,'id_marca'=>$request->idMarcaEdit]
            );
        }else{
            $id_ubicar=UbicarDireccionMarca::count('id');
            $id_ubicar+=1;
            UbicarDireccionMarca::create(
                ['id'=>$id_ubicar,'id_direccion'=>$request->catalogoDireccion,'id_marca'=>$request->idMarcaEdit]
            );

        }
        return view('index');
    }

    public function saveMarca(Request $request){
        $id_marca=Marca::count('id');
        $id_marca+=1;
        Marca::create(
            ['id'=>$id_marca, 'nombre'=>$request->nombreMarcaCreate]
        );
        if($request->nuevaDireccionMarcaCreate==0){
            $id=Direccion::count('id');
            $id+=1;
            Direccion::create(
                ['id'=>$id,'calle'=>$request->calleDirMarcaCreate,'num_int'=>$request->numIntDirMarcaCreate,'num_ext'=>$request->numExtDirMarcaCreate,
                'asentamiento'=>$request->asentamientoDirMarcaCreate,'municipio'=>$request->municipioDirMarcaCreate,'estado'=>$request->estadoDirMarcaCreate,
                'codigo_postal'=>$request->cpDirMarcaCreate]
            );
            $id_ubicar=UbicarDireccionMarca::count('id');
            $id_ubicar+=1;
            UbicarDireccionMarca::create(
                ['id'=>$id_ubicar,'id_direccion'=>$id,'id_marca'=>$id_marca]
            );
        }else{
            $id_ubicar=UbicarDireccionMarca::count('id');
            $id_ubicar+=1;
            UbicarDireccionMarca::create(
                ['id'=>$id_ubicar,'id_direccion'=>$request->catalogoDireccionCreate,'id_marca'=>$id_marca]
            );
        }
        return view('index');
    }
}
