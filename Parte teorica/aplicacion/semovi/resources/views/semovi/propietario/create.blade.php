@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Dar de alta un nuevo propietario</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <a class="navbar-brand" href="{{ url('/index') }}">
                                    Regresar al inicio
                                </a>
                            </div>
                        </div>
                    </div>
                    {!! Form::open(['route' => ['guardar_propietario'], 'method' => 'POST']) !!}
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">RFC del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('rfcPropCreate',null, ['class' => 'form-control', 'placeholder' => 'RFC', 'id' => 'rfcPropCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '13']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de nacimiento del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaNacimientoPropCreate', null, ['class' => 'form-control', 'placeholder' => 'Fecha', 'id' => 'fechaNacimientoPropCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('nombrePersonaCreate', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombrePersonaCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido paterno</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('apPersonaCreate',null, ['class' => 'form-control', 'placeholder' => 'Apellido paterno', 'id' => 'apPersonaCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido materno</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('amPersonaCreate', null, ['class' => 'form-control', 'placeholder' => 'Apellido materno', 'id' => 'amPersonaCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Domicilio del Nuevo Propietario</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">¿Direccion nueva?</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                    {!! Form::select('nuevaDireccion',['SI','NO'] ,0, ['class' => 'form-control', 'id' => 'nuevaDireccion', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero interior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numIntDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Numero Interior', 'id' => 'numIntDirCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Calle', 'id' => 'calleDirCreate', 'autocomplete' => 'off','maxlength' => '200', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero Exterior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numExtDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Numero Exterior', 'id' => 'numExtDirCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Asentamiento</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('asentamientoDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Asentamiento', 'id' => 'asentamientoDirCreate', 'autocomplete' => 'off','maxlength' => '200', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('municipioDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Municipio', 'id' => 'municipioDirCreate', 'autocomplete' => 'off','maxlength' => '150', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('estadoDirCreate', null, ['class' => 'form-control', 'placeholder' => 'Estado', 'id' => 'estadoDirCreate', 'autocomplete' => 'off','maxlength' => '100', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Código Postal</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('cpDirCreate', null , ['class' => 'form-control', 'placeholder' => 'Código Postal', 'id' => 'cpDirCreate', 'autocomplete' => 'off','maxlength' => '20', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5> Licencia Nuevo Propietario</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Recuerda que el tipo de licencia es determinado por la primera letra del número de licencia</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de licencia a asignar</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('numLicenciaCreate', null, ['class' => 'form-control', 'placeholder' => 'Número', 'id' => 'numLicenciaCreate', 'autocomplete' => 'off','maxlength' => '8', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de caducidad de la nueva licencia</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaLicenciaCreate', null, ['class' => 'form-control', 'placeholder' => 'Licencia del infractor', 'id' => 'fechaLicenciaCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar nuevo  propietario" class="btn submitter btn-success" id="submitCreatePropietario">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
