@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Ingresar un nuevo vehiculo al parque de la CDMX</div>

                <div class="card-body">
                    <h6>Ingresa los datos a continuación para generar el alta del vehículo</h6>
                    {!! Form::open(['route' => ['guardar_vehiculo'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Modelo del vehículo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('modelo',$modelos, null, ['class' => 'form-control', 'placeholder' => 'Modelo', 'id' => 'modelo', 'autocomplete' => 'off','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Motor del vehículo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('motor',$motores, null, ['class' => 'form-control', 'placeholder' => 'Motor', 'id' => 'motor', 'autocomplete' => 'off','required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Capacidad del tanque</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('tanque', null, ['class' => 'form-control', 'placeholder' => 'Litros', 'id' => 'tanque', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de pasajeros</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('pasajeros', null, ['class' => 'form-control', 'placeholder' => 'Pasajeros', 'id' => 'pasajeros', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de placas a asignar</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('placas', null, ['class' => 'form-control', 'placeholder' => 'Placas', 'id' => 'placas', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '7']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de serie del vehículo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('numSerie', null, ['class' => 'form-control', 'placeholder' => 'Número de serie', 'id' => 'numSerie', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '17']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de tarjeta de circulación asignado</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('numCirculacion', null, ['class' => 'form-control', 'placeholder' => 'Tarjeta de circulación', 'id' => 'numCirculacion', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '8']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de caducidad de la tarjeta de circulación asignada</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaCaducidad', null, ['class' => 'form-control datepicker', 'placeholder' => 'Fecha', 'id' => 'numCirculacion', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Tipo de Transmisión</label>
                        <div class="col-sm-7">
                          <div class="form-group">
                            {!! Form::select('tipoTransmision',['estandar','automatica'] ,null, ['class' => 'form-control', 'placeholder' => 'Tipo de Transmisión', 'id' => 'tipoTransmision', 'autocomplete' => 'off','required' => 'required']) !!}
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="float-right">
                            <input type="submit" value="Registrar vehículo" class="btn submitter btn-success" id="submitVehiculo">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
