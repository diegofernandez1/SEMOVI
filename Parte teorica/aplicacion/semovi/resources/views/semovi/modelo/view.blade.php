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
                        <label class="col-sm-2 col-form-label">Id Marca ensambladora</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('q', $modelo->idMarca->id, ['class' => 'form-control', 'placeholder' => 'ID', 'id' => 'q', 'autocomplete' => 'off', 'required' => 'required','readonly']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre de la marca ensambladora</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('v', $modelo->idMarca->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'v', 'autocomplete' => 'off', 'required' => 'required','readonly','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Id del modelo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('h', $modelo->id, ['class' => 'form-control', 'placeholder' => 'Id', 'id' => 'h', 'autocomplete' => 'off', 'required' => 'required','readonly',]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre del modelo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('l', $modelo->nombre_modelo, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'l', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200','readonly']) !!}
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
