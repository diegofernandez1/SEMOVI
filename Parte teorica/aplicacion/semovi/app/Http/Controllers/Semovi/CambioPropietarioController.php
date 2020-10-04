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
class CambioPropietarioController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.cambioPropietario.index')
        ->with('propietarios',$this->getPropietariosSelect())
        ->with('vehiculos',$this->getVehiculoSelect());
    }
    public function getPropietariosSelect(){
        $getPropietarios=Propietario::with(['idPersona'])->get();

        foreach($getPropietarios as $key){
            $propietarios[$key->id]=$key->id.' '.$key->idPersona->nombre.' '.$key->idPersona->apellido_paterno.' '.$key->idPersona->apellido_materno.' RFC: '.$key->rfc;
        }
        return $propietarios;
    }
    public function getVehiculoSelect(){
        $getVehiculos=Vehiculo::with(['idModelo','idMotor'])->get();

        foreach($getVehiculos as $key){
            $vehiculos[$key->id]=$key->id.' Modelo: '.$key->idModelo->nombre_modelo.' Placas: '.$key->numero_placa.' Tarjeta de Circulación: '.
            $key->numero_tarjeta_circulacion .' Cilindros: '.$key->idMotor->cilindraje.' Litros_motor:'.$key->idMotor->litros_motor;
        }
        return $vehiculos;
    }
    public function asignarPropietario(Request $request){
        $propietarioVehiculo=TenerPropietarioVehiculo::where('id_vehiculo',$request->cambioVehiculo)->get();
        if(!is_null($propietarioVehiculo)){
            foreach($propietarioVehiculo as $vehiculo){
                TenerPropietarioVehiculo::updateOrCreate(
                    ['id'=>$vehiculo->id],
                    ['fecha_fin'=>Carbon::today()]);
            }

        }
        $id=TenerPropietarioVehiculo::count('id');
        $id+=1;
        TenerPropietarioVehiculo::create(
            ['id'=>$id,'id_vehiculo'=>$request->cambioVehiculo,'id_propietario'=>$request->cambioPropietario,'fecha_inicio'=>Carbon::today()]);
        return view('index');

    }
}
