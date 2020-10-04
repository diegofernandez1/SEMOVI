@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Asigna un propietario a un vehículo</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ml-auto">
                            {!! Form::open(['route' => ['asignar_propietario'], 'method' => 'POST']) !!}
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Vehículos</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        {!! Form::select('cambioVehiculo',$vehiculos ,null, ['class' => 'form-control', 'placeholder' => 'Vehículos', 'id' => 'vehículos', 'autocomplete' => 'off', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label">Propietarios</label>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        {!! Form::select('cambioPropietario',$propietarios ,null, ['class' => 'form-control', 'placeholder' => 'Propietarios', 'id' => 'cambioPropietario', 'autocomplete' => 'off', 'required' => 'required']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mx-auto">
                                    <input type="submit" value="Registrar nuevo propietario" class="btn submitter btn-success" id="submitCambioPropietario">
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>

    $(document).ready(function() {
        $('#datatable').DataTable();
    });

</script>
@endpush



