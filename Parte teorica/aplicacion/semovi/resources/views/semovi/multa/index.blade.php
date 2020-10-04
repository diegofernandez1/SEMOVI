@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Sección de multas</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ml-auto">
                            {!! Form::open(['route' => ['crear_multa'], 'method' => 'POST']) !!}
                                <input type="submit" value="Generar nueva multa aquí" class="btn submitter btn-success" id="nuevaMulta">
                            {!! Form::close() !!}
                            {{-- {!! Form::open(['route' => ['asignar_vehiculo'], 'method' => 'POST']) !!}
                                <input type="submit" value="Asignar vehículos a las multas aquí" class="btn submitter btn-success" id="nuevaMulta">
                            {!! Form::close() !!} --}}
                            {{-- {!! Form::open(['route' => ['asignar_tipo_transmision'], 'method' => 'POST']) !!}
                                <input type="submit" value="Asigna transmision aquí" class="btn submitter btn-success" id="asignaTrans">
                            {!! Form::close() !!} --}}
                            {{-- {!! Form::open(['route' => ['crear_rfc'], 'method' => 'POST']) !!}
                                <input type="submit" value="Asigna rfc aquí" class="btn submitter btn-success" id="asignaTrans">
                            {!! Form::close() !!} --}}
                        </div>
                    </div>
                    <h6>Selecciona alguna de las multas del sistema para continuar</h6>
                    <div class="tablaMultas">
                        @include('semovi.multa.table')
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



