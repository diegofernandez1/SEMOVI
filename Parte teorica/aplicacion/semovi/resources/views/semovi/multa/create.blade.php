@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Verificar datos de la multa seleccionada</div>
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
                    {!! Form::open(['route' => ['guardar_multa'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero de Expediente</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numeroExpediente', null, ['class' => 'form-control', 'placeholder' => 'Numero de Expediente', 'id' => 'numeroExpediente', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Importe de la multa</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('importe', null, ['class' => 'form-control', 'placeholder' => 'Importe de la multa', 'id' => 'importe', 'autocomplete' => 'off', 'required' => 'required',]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('fechaMulta',null, ['class' => 'form-control', 'placeholder' => 'Fecha de la infracción', 'id' => 'fechaMulta', 'autocomplete' => 'off', 'required' => 'required',]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle donde ocurrió la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleInfraccion',null, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => 'calleInfraccion', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calles aledañas</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('calleInfraccion1',null, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => 'calleInfraccion1', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150']) !!}
                                {!! Form::text('calleInfraccion2', null, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => 'calleInfraccion2', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio donde ocurrió la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('municipioInfraccion',null, ['class' => 'form-control', 'placeholder' => 'Municipio donde ocurrió la infracción', 'id' => 'municipioInfraccion', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Licencia</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('licencia',$licencias, null, ['class' => 'form-control', 'placeholder' => 'Licencias', 'id' => 'licencia', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Vehiculo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('vehiculo', $vehiculos,null, ['class' => 'form-control', 'placeholder' => 'Vehiculos', 'id' => 'vehiculo', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Articulo infringido</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('articulo',$articulos ,null, ['class' => 'form-control', 'placeholder' => 'Articulos', 'id' => 'articulo', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Agente Infractor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('agente',$agentes ,null, ['class' => 'form-control', 'placeholder' => 'Agentes', 'id' => 'agente', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar multa" class="btn submitter btn-success" id="submitMulta">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
