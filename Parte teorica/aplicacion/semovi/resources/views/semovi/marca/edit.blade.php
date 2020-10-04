@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Editar datos de la marca-dirección selccionada</div>
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
                    {!! Form::open(['route' => ['guardar_marca_edit'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Id</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('idMarcaEdit', $marca->idMarca->id, ['class' => 'form-control', 'placeholder' => 'Id', 'id' => 'idMarcaEdit', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre de la marca</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('nombreMarcaEdit', $marca->idMarca->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombreMarcaEdit', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Editar domicilio seleccionado, favor de seleccionar alguna de las direcciones especificadas o ingresar una nueva</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">¿Direccion nueva?</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                    {!! Form::select('nuevaDireccionMarca',['SI','NO'] ,1, ['class' => 'form-control', 'id' => 'nuevaDireccionMarca', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Direcciones en el catálogo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                    {!! Form::select('catalogoDireccion',$direcciones ,$marca->idDireccion->id, ['class' => 'form-control', 'id' => 'nuevaDireccion', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero interior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numIntDirMarca', null, ['class' => 'form-control', 'placeholder' => 'Numero Interior', 'id' => 'numIntDirCreate', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleDirMarcaEdit', null, ['class' => 'form-control', 'placeholder' => 'Calle', 'id' => 'calleDirMarcaEdit', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero Exterior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numExtDirMarcaEdit', null, ['class' => 'form-control', 'placeholder' => 'Numero Exterior', 'id' => 'numExtDirMarcaEdit', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Asentamiento</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('asentamientoDirMarcaEdit', null, ['class' => 'form-control', 'placeholder' => 'Asentamiento', 'id' => 'asentamientoDirMarcaEdit', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('municipioDirMarcaEdit', null, ['class' => 'form-control', 'placeholder' => 'Municipio', 'id' => 'municipioDirMarcaEdit', 'autocomplete' => 'off','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('estadoDirMarcaEdit', null, ['class' => 'form-control', 'placeholder' => 'Estado', 'id' => 'estadoDirMarcaEdit', 'autocomplete' => 'off','maxlength' => '100']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Código Postal</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('cpDirMarcaEdit', null , ['class' => 'form-control', 'placeholder' => 'Código Postal', 'id' => 'cpDirMarcaEdit', 'autocomplete' => 'off','maxlength' => '20']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar cambios" class="btn submitter btn-success" id="submitEditMarca">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
