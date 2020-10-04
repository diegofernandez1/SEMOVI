@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Sección de administración de Modelos</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ml-auto">
                            {!! Form::open(['route' => ['crear_modelo'], 'method' => 'POST']) !!}
                                <input type="submit" value="Generar nuevo motor" class="btn submitter btn-success" id="nuevoModelo">
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <h6>Selecciona alguno de los modelos del sistema para continuar</h6>
                    <div class="tablaMultas">
                        @include('semovi.modelo.table')
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



