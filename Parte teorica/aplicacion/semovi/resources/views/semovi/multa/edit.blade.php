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
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Numero de Expediente</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('1', $infraccion->numero_expediente, ['class' => 'form-control', 'placeholder' => 'Numero de Expediente', 'id' => '1', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Importe de la multa</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('2', $infraccion->importe, ['class' => 'form-control', 'placeholder' => 'Importe de la multa', 'id' => '2', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('3', $infraccion->fecha, ['class' => 'form-control', 'placeholder' => 'Fecha de la infracción', 'id' => '3', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calle donde ocurrió la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('4', $infraccion->calle, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => '4', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Calles aledañas</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('5',$infraccion->calle_anterior, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => '5', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150','readonly']) !!}
                                {!! Form::text('6', $infraccion->calle_siguiente, ['class' => 'form-control', 'placeholder' => 'Calle donde ocurrió la infracción', 'id' => '6', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Municipio donde ocurrió la infracción</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('7', $infraccion->municipio, ['class' => 'form-control', 'placeholder' => 'Municipio donde ocurrió la infracción', 'id' => '7', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '150','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Licencia del infractor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('8', $licencia->numero, ['class' => 'form-control', 'placeholder' => 'Licencia del infractor', 'id' => '8', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '8','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Tipo de licencia del infractor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('9', $licencia->tipo, ['class' => 'form-control', 'placeholder' => 'Tipo de licencia del infractor', 'id' => '9', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '1','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de caducidad de la licencia del infractor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('a', $licencia->fecha_caducidad, ['class' => 'form-control', 'placeholder' => 'Fecha de caducidad de la licencia del infractor', 'id' => 'a', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre del infractor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('s', $propietario->idPersona->nombre.' '.$propietario->idPersona->apellido_paterno.' '.$propietario->idPersona->apellido_paterno, ['class' => 'form-control', 'placeholder' => 'Nombre del infractor', 'id' => 's', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número del agente que impuso la multa</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('d', $agente->numero_agente, ['class' => 'form-control', 'placeholder' => 'Número del agente que impuso la multa', 'id' => 'd', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '8','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre del agente de tránsito</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('f', $agente->idPersona->nombre.' '.$agente->idPersona->apellido_paterno.' '.$agente->idPersona->apellido_paterno, ['class' => 'form-control', 'placeholder' => 'Nombre del agente de tránsito', 'id' => 'f', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '8','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de tarjeta de circulación</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('g', $vehiculo->numero_tarjeta_circulacion, ['class' => 'form-control', 'placeholder' => 'Número de tarjeta de circulación', 'id' => 'g', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Fecha de caducidad de la tarjeta de circulación</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::date('h', $vehiculo->fecha_caducidad_tarjeta_circulacion, ['class' => 'form-control', 'placeholder' => 'Placas', 'id' => 'h', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de serie del vehículo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('y', $vehiculo->numero_serie, ['class' => 'form-control', 'placeholder' => 'Número de serie', 'id' => 'y', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de placas</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('m', $vehiculo->numero_placa, ['class' => 'form-control', 'placeholder' => 'Número de placas', 'id' => 'm', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
