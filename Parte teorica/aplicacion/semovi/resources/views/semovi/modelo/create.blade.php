@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Genera los datos del nuevo modelo que entra al parque vehicular</div>
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
                    {!! Form::open(['route' => ['guardar_modelo'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Marca ensambladora</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::select('nomMarcaCreate', $marcas,null, ['class' => 'form-control', 'placeholder' => 'Marcas', 'id' => 'nomMarcaCreate', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Nombre del modelo</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::text('nomModeloCreate', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'id' => 'nomModeloCreate', 'autocomplete' => 'off', 'required' => 'required','maxlength' => '200']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar modelo" class="btn submitter btn-success" id="submitModelo">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
