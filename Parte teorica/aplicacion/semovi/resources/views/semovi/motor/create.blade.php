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
                    {!! Form::open(['route' => ['guardar_motor'], 'method' => 'POST']) !!}
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Número de cilindros del motor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('numeroCilindros', null, ['class' => 'form-control', 'placeholder' => 'Cilindros', 'id' => 'numeroCilindros', 'autocomplete' => 'off', 'required' => 'required']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Litros del motor</label>
                        <div class="col-md-8">
                            <div class="form-group">
                                {!! Form::number('litros', null, ['class' => 'form-control', 'placeholder' => 'Litros', 'id' => 'litros', 'autocomplete' => 'off', 'required' => 'required',]) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mx-auto">
                            <input type="submit" value="Registrar multa" class="btn submitter btn-success" id="submitMotor">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
