@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Editar datos del propietario</div>
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
                    {!! Form::open(['route' => ['guardar_propietario_edit'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Identificador del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('idPropEdit', $propietario->id, ['class' => 'form-control', 'placeholder' => 'Id', 'id' => 'idPropEdit', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">RFC del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('rfcPropEdit', $propietario->rfc, ['class' => 'form-control', 'placeholder' => 'RFC', 'id' => 'rfcPropEdit', 'autocomplete' => 'off', 'required' => 'required','readonly','maxlength' => '13']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de nacimiento del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaNacimientoPropEdit', $propietario->fecha_nacimiento, ['class' => 'form-control', 'placeholder' => 'Fecha', 'id' => 'fechaNacimientoPropEdit', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Identificador Personal del Propietario</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('idPersonaEdit', $propietario->idPersona->id, ['class' => 'form-control', 'placeholder' => 'Fecha de la infracción', 'Id' => 'idPersonaEdit', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('nombrePersonaEdit', $propietario->idPersona->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nombrePersonaEdit', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido paterno</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('apPersonaEdit',$propietario->idPersona->apellido_paterno, ['class' => 'form-control', 'placeholder' => 'Apellido paterno', 'id' => 'apPersonaEdit', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Apellido materno</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('amPersonaEdit', $propietario->idPersona->apellido_materno, ['class' => 'form-control', 'placeholder' => 'Apellido materno', 'id' => 'amPersonaEdit', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Domicilio del Propietario</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero interior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numIntDirEdit', $propietario->idDireccion->num_int, ['class' => 'form-control', 'placeholder' => 'Numero Interior', 'id' => 'numIntDirEdit', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleDirEdit', $propietario->idDireccion->calle, ['class' => 'form-control', 'placeholder' => 'Calle', 'id' => 'calleDirEdit', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero Exterior</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numExtDirEdit', $propietario->idDireccion->num_ext, ['class' => 'form-control', 'placeholder' => 'Numero Exterior', 'id' => 'numExtDirEdit', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Asentamiento</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('asentamientoDirEdit', $propietario->idDireccion->asentamiento, ['class' => 'form-control', 'placeholder' => 'Asentamiento', 'id' => 'asentamientoDirEdit', 'autocomplete' => 'off','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('municipioDirEdit', $propietario->idDireccion->municipio, ['class' => 'form-control', 'placeholder' => 'Municipio', 'id' => 'municipioDirEdit', 'autocomplete' => 'off','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Estado</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('estadoDirEdit', $propietario->idDireccion->estado, ['class' => 'form-control', 'placeholder' => 'Estado', 'id' => 'estadoDirEdit', 'autocomplete' => 'off','maxlength' => '100']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Código Postal</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('cpDirEdit', $propietario->idDireccion->codigo_postal , ['class' => 'form-control', 'placeholder' => 'Código Postal', 'id' => 'cpDirEdit', 'autocomplete' => 'off','maxlength' => '20']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h5>Opcional: Si deseas agregar una nueva licencia al propietario actual porfavor llena todos los campos siguientes</h5>
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
                                {!! Form::text('numLicenciaEdit', null, ['class' => 'form-control', 'placeholder' => 'Número', 'id' => 'numLicenciaEdit', 'autocomplete' => 'off','maxlength' => '8']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de caducidad de la nueva licencia</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaLicenciaEdit', null, ['class' => 'form-control', 'placeholder' => 'Licencia del infractor', 'id' => 'fechaLicenciaEdit', 'autocomplete' => 'off']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar cambios propietario" class="btn submitter btn-success" id="submitEditPropietario">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
