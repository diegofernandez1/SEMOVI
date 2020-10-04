<?php

namespace App\Http\Controllers\Semovi;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\semovi\AgenteTransito;
use App\Models\semovi\Articulo;
use App\Models\semovi\Direccion;
use App\Models\semovi\Infraccion;
use App\Models\semovi\Licencia;
use App\Models\semovi\Modelo;
use App\Models\semovi\Motor;
use App\Models\semovi\Persona;
use App\Models\semovi\Vehiculo;
use App\Models\semovi\Propietario;
use App\Models\semovi\TenerPropietarioVehiculo;
use Laravel\Ui\Presets\React;
use Response;
use Illuminate\Support\Carbon;
class PropietarioController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.propietario.index')
        ->with('propietarios',$this->getPropietarios());
    }
    public function crearPropietario(Request $request){
        return view('semovi.propietario.create');
    }

    public function editarPropietario(Request $request){
        $propietario=Propietario::with(['idPersona','idDireccion'])->where('id',$request->idPropietarioEditar)->first();
        return view('semovi.propietario.edit')
        ->with('propietario',$propietario);

    }
    public function savePropietario(Request $request){
        $id_persona=Persona::count('id');
        $id_persona+=1;
        Persona::create(
            ['id'=>$id_persona,'nombre'=>$request->nombrePersonaCreate,'apellido_paterno'=>$request->apPersonaCreate,'apellido_materno'=>$request->amPersonaCreate]);
        $id_direccion=Direccion::count('id');
        $id_direccion+=1;
        Direccion::create(
            ['id'=>$id_direccion,'num_int'=>$request->numIntDirCreate,'num_ext'=>$request->numExtDirCreate,'calle'=>$request->calleDirCreate,
            'asentamiento'=>$request->asentamientoDirCreate,'municipio'=>$request->municipioDirCreate,'estado'=>$request->estadoDirCreate,
            'codigo_postal'=>$request->cpDirCreate]);
        $id_propietario=Propietario::count('id');
        $id_propietario+=1;
        Propietario::create(
            ['id'=>$id_propietario,'id_persona'=>$id_persona,'id_direccion'=>$id_direccion,'rfc'=>$request->rfcPropCreate,'fecha_nacimiento'=>$request->fechaNacimientoPropCreate]
        );
        $id_licencia=Licencia::count('id');
        $id_licencia+=1;
        $tipo=substr($request->numLicenciaCreate,0,1);
        Licencia::create(
            ['id'=>$id_licencia,'numero'=>$request->numLicenciaCreate,'tipo'=>$tipo,'id_propietario'=>$id_propietario,'fecha_caducidad'=>$request->fechaLicenciaCreate]);
        return view('index');
    }
    public function getPropietarios(){
        return Propietario::with(['idPersona','idDireccion'])->get();
    }
    public function savePropietarioEdit(Request $request){
        Persona::updateOrCreate(
            ['id'=>$request->idPersonaEdit],
            ['nombre'=>$request->nombrePersonaEdit,'apellido_paterno'=>$request->apPersonaEdit,'apellido_materno'=>$request->amPersonaEdit]);
        if($request->cambiosDireccion==0){
            $id=Direccion::count('id');
            $id+=1;
            Direccion::create(
                ['id'=>$id,'num_int'=>$request->numIntDirEdit,'num_ext'=>$request->numExtDirEdit,'calle'=>$request->calleDirEdit,
                'asentamiento'=>$request->asentamientoDirEdit,'municipio'=>$request->municipioDirEdit,'estado'=>$request->estadoDirEdit,
                'codigo_postal'=>$request->cpDirEdit]);
                $this->actualizaDireccion($id,$request);
        }
        Propietario::updateOrCreate(
            ['id'=>$request->idPropEdit,'id_persona'=>$request->idPersonaEdit],
            ['rfc'=>$request->rfcPropEdit,'fecha_nacimiento'=>$request->fechaNacimientoPropEdit]
        );
        if(!is_null(($request->numLicenciaEdit))){
            $id=Licencia::count('id');
            $id+=1;
            $tipo=substr($request->numLicenciaEdit,0,1);
            Licencia::create(
                ['id'=>$id,'numero'=>$request->numLicenciaEdit,'tipo'=>$tipo,'id_propietario'=>$request->idPropEdit,'fecha_caducidad'=>$request->fechaLicenciaEdit]);
        }
        return view('index');
    }
    public function actualizaDireccion($id_direccion,Request $request){
        Propietario::updateOrCreate(
            ['id'=>$request->idPropEdit],
            ['id_direccion'=>$id_direccion]
        );

    }
}
