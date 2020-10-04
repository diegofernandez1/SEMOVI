<?php

namespace App\Http\Controllers\Semovi;

use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\semovi\AgenteTransito;
use App\Models\semovi\Articulo;
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
class MultaController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.multa.index')
         ->with('infracciones',$this->getInfracciones());
    }
    // public function rfc(Request $request){
    //     $propietarios= Propietario::with(['idPersona'])->get();
    //     foreach($propietarios as $propietario){
    //         $apellidoPaterno=strtoupper(substr($propietario->idPersona->apellido_paterno,0,2));
    //         $apellidoMaterno=strtoupper(substr($propietario->idPersona->apellido_materno,0,1));
    //         $nombre=strtoupper(substr($propietario->idPersona->nombre,0,1));
    //         $fecha=explode('-',$propietario->fecha_nacimiento);
    //         $homoclave_letra1= strtoupper(chr(rand(97,122)));
    //         $homoclave_letra2= strtoupper(chr(rand(97,122)));
    //         $homoclave_numero=rand(0,9);
    //         $rfc=$apellidoPaterno.$apellidoMaterno.$nombre.substr($fecha[0],2,2).$fecha[1]
    //         .explode(' ',$fecha[2])[0].$homoclave_letra1.$homoclave_letra2.$homoclave_numero;
    //         Propietario::updateOrCreate(
    //             ['id'=>$propietario->id],
    //             ['rfc'=>$rfc]
    //         );
    //     }
    // }
    // public function tipoTransmision(Request $request){
    //      $vehiculos=Vehiculo::all();
    //      $transmision=["automatico","estandar"];
    //      foreach($vehiculos as $vehiculo){
    //          $aux=$transmision[rand(0,1)];
    //          Vehiculo::updateOrCreate(
    //              ['id'=>$vehiculo->id],
    //              ['tipo_transmision'=>$aux]
    //          );
    //      }
    //      return;
    // }
    // public function asignarVehiculo(Request $request){
    //     $infracciones=Infraccion::with(['idInfractor'])->get();
    //     foreach($infracciones as $infraccion){
    //         $tieneVehiculos=TenerPropietarioVehiculo::where('id_propietario',$infraccion->id_infractor)->first();
    //         ;//tamaño buscado del aleatorio
    //         if(!(is_null($tieneVehiculos))){
    //             Infraccion::updateOrCreate(
    //                 ['id_infractor'=>$tieneVehiculos->id_propietario],
    //                 ['id_vehiculo'=>$tieneVehiculos->id_vehiculo]
    //             );
    //         }else
    //             Infraccion::where('numero_expediente',$infraccion->numero_expediente)->delete();

    //     }

    // }
    public function editarMultas(Request $request){
        $infraccion=Infraccion::where('numero_expediente',$request->numeroExpedienteInfraccionEditar)->first();
        $propietario=Propietario::with(['idPersona'])->where('id',$infraccion->id_infractor)->first();

        $licencia=Licencia::where('id_propietario',$infraccion->id_infractor)->first();
        $articulo=Articulo::where('numero',$infraccion->numero_articulo)->first();

        $agente=AgenteTransito::with(['idPersona'])->where('numero_agente',$infraccion->numero_agente)->first();

        $vehiculo=Vehiculo::where('id',$infraccion->id_vehiculo)->first();
        return view('semovi.multa.edit')
        ->with('infraccion',$infraccion)
        ->with('propietario',$propietario)
        ->with('agente',$agente)
        ->with('articulo',$articulo)
        ->with('licencia',$licencia)
        ->with('vehiculo',$vehiculo);
    }
    public function eliminarMulta(Request $request){
        Infraccion::where('numero_expediente',$request->numeroExpedienteInfraccionEliminar)->delete();
        return view('index');
    }
    public function crearMulta(Request $request){
        return view('semovi.multa.create')
        ->with('agentes',$this->getAgentesSelect())
        ->with('propietarios',$this->getPropietariosSelect())
        ->with('articulos',$this->getArticulosSelect())
        ->with('vehiculos',$this->getVehiculosSelect())
        ->with('licencias',$this->getLicenciasSelect());
    }
    public function saveMulta(Request $request){
        Infraccion::create(
            ['numero_expediente'=>$request->numeroExpediente,'importe'=>$request->importe,'fecha'=>Carbon::createFromFormat('Y-m-d',$request->fechaMulta),
            'calle'=>$request->calleInfraccion,'calle_anterior'=>$request->calleInfraccion1,'calle_siguiente'=>$request->calleInfraccion2,
            'municipio'=>$request->municipioInfraccion,'id_infractor'=>$request->licencia,'id_vehiculo'=>$request->vehiculo,
            'numero_articulo'=>$request->articulo,'numero_agente'=>$request->agente]
        );
        return view('index');
    }
    public function getInfracciones(){
        return Infraccion::with(['numeroArticulo','numeroAgente','idInfractor'])->get();
    }
    public function save(Request $request){
        ;
        $hoy=Carbon::now();
        $fechaCaducidad=Carbon::createFromFormat('Y-m-d',$request->fechaCaducidad);
        $motores=$this->getMotores();

        $id_motor=explode(',',$motor);
        $modelos=$this->getModelos();

        $id_modelo=explode(' ',$modelo);
        Vehiculo::updateOrCreate(
            [],['id_motor'=>$request->motor,'id_modelo'=>$request->modelo,'numero_tarjeta_circulacion'=>$request->numCirculacion,'numero_serie'=>$request->numSerie,
            'numero_placa '=>$request->placas,'capacidad_tanque'=>$request->tanque,'num_pasajeros'=>$request->pasajeros,'fecha_caducidad_tarjeta_circulacion'=>$fechaCaducidad,
            'fecha_emplacado'=>$hoy]
        );
        return view('index');
    }
    public function getPropietariosSelect(){
        $getPropietarios=Propietario::with(['idPersona'])->get();

        foreach($getPropietarios as $key){
            $propietarios[$key->id]=$key->id.' '.$key->idPersona->nombre.' '.$key->idPersona->apellido_paterno.' '.$key->idPersona->apellido_materno;
        }
        return $propietarios;
    }
    public function getLicenciasSelect(){
        $getLicencias=Licencia::with(['idPropietario'])->get();

        foreach($getLicencias as $key){
            $licencias[$key->id]=$key->id.' RFC Dueño de la licencia: '.$key->idPropietario->rfc.' Licencia con folio:'.$key->numero;
        }
        return $licencias;
    }
    public function getArticulosSelect(){
        $getArticulos=Articulo::all();
        $articulos=[];
        foreach($getArticulos as $key){
            $articulos[$key->numero]=$key->numero.' '.$key->descripcion;
        }
        return $articulos;
    }
    public function getAgentesSelect(){
        $getAgentes=AgenteTransito::with(['idPersona'])->get();

        foreach($getAgentes as $key){
            $agentes[$key->numero_agente]=$key->numero_agente.' '.$key->idPersona->nombre.' '.$key->idPersona->apellido_paterno.' '.$key->idPersona->apellido_materno;
        }
        return $agentes;
    }
    public function getVehiculosSelect(){
        $getVehiculos=TenerPropietarioVehiculo::with(['idPropietario','idVehiculo'])->get()->sortBy('id_propietario');
        foreach($getVehiculos as $key){
            $vehiculos[$key->idVehiculo->id]=$key->id_propietario.' RFC propietario: '.$key->idPropietario->rfc.' Tarjeta de circulacion:'.$key->idVehiculo->numero_tarjeta_circulacion.' Placas: '.$key->idVehiculo->numero_placa;
        }
        return $vehiculos;
    }
}
