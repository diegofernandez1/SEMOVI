@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Generar datos de la nueva marca</div>
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
                    {!! Form::open(['route' => ['guardar_marca'], 'method' => 'POST']) !!}

                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre de la marca</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('nombreMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombreMarcaCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Asignar domicilio a la nueva marca, favor de seleccionar alguna de las direcciones especificadas o ingresar una nueva</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">¿Direccion nueva?</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                    {!! Form::select('nuevaDireccionMarcaCreate',['SI','NO'] ,1, ['class' => 'form-control', 'id' => 'nuevaDireccionMarcaCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Direcciones en el catálogo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                    {!! Form::select('catalogoDireccionCreate',$direcciones ,null, ['class' => 'form-control', 'id' => 'catalogoDireccionCreate', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero interior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numIntDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Numero Interior', 'id' => 'numIntDirMarcaCreate', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Calle', 'id' => 'calleDirMarcaCreate', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero Exterior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numExtDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Numero Exterior', 'id' => 'numExtDirMarcaCreate', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Asentamiento</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('asentamientoDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Asentamiento', 'id' => 'asentamientoDirMarcaCreate', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('municipioDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Municipio', 'id' => 'municipioDirMarcaCreate', 'autocomplete' => 'off','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('estadoDirMarcaCreate', null, ['class' => 'form-control', 'placeholder' => 'Estado', 'id' => 'estadoDirMarcaCreate', 'autocomplete' => 'off','maxlength' => '100']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Código Postal</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('cpDirMarcaCreate', null , ['class' => 'form-control', 'placeholder' => 'Código Postal', 'id' => 'cpDirMarcaCreate', 'autocomplete' => 'off','maxlength' => '20']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar nueva marca" class="btn submitter btn-success" id="submitCreateMarca">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
