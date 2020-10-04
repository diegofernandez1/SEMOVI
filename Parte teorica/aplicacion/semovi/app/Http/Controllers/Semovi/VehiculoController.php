<?php

namespace App\Http\Controllers\Semovi;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\semovi\Modelo;
use App\Models\semovi\Motor;

use App\Models\semovi\Vehiculo;
use Laravel\Ui\Presets\React;
use Response;
use Illuminate\Support\Carbon;
class VehiculoController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.vehiculo.index')
         ->with('modelos',$this->getModelos())
         ->with('motores',$this->getMotores());
    }

    public function getModelos(){

        $modelos= Modelo::with(['idMarca'])->get();
        foreach($modelos as $modelo){
            $data[$modelo->id]=($modelo->id.' '.$modelo->idMarca->nombre.' '.$modelo->nombre_modelo);
        }
        return $data;
    }
    public function getMotores(){
        $motores= Motor::all();

        foreach($motores as $motor){
            $data[$motor->id]=($motor->id.', Cilindros:'.$motor->cilindraje.', Litros del motor:'.$motor->litros_motor);
        }
        return $data;
    }
    public function save(Request $request){
        ($request->tipoTransmision==0)? $transmision="estandar" : $transmision="automatica";
        $hoy=Carbon::now();
        $fechaCaducidad=Carbon::createFromFormat('Y-m-d',$request->fechaCaducidad);
        $id=Vehiculo::count('id');
        $id=$id+1;
        Vehiculo::create(
            ['id'=>$id,'id_motor'=>$request->motor,'id_modelo'=>$request->modelo,'numero_tarjeta_circulacion'=>$request->numCirculacion,'numero_serie'=>$request->numSerie,
            'numero_placa '=>$request->placas,'capacidad_tanque'=>$request->tanque,'num_pasajeros'=>$request->pasajeros,'fecha_caducidad_tarjeta_circulacion'=>$fechaCaducidad,
            'fecha_emplacado'=>$hoy,'tipo_transmision'=>$transmision]
        );
        return view('index');
    }
}
