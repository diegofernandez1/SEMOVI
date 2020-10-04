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
class MotorController extends AppBaseController
{
    public function index(Request $request){
        return view('semovi.motor.index')
        ->with('motores',Motor::all());
    }
    public function crearMotor(Request $request){
        return view('semovi.motor.create');
    }
    public function saveMotor(Request $request){
        $id=Motor::count('id');
        $id+=1;
        Motor::create(
            ['id'=>$id,'cilindraje'=>$request->numeroCilindros,'litros_motor'=>$request->litros]
        );
        return view('index');
    }
}
