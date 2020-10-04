@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="font-size: larger">Administración de marcas</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ml-auto">
                            {!! Form::open(['route' => ['crear_marca'], 'method' => 'POST']) !!}
                                <input type="submit" value="Dar de alta nueva marca" class="btn submitter btn-success" id="nuevaMulta">
                            {!! Form::close() !!}

                        </div>
                    </div>
                    <h6>Selecciona alguna de las multas del sistema para continuar</h6>
                    <div class="tablaMultas">
                        @include('semovi.marca.table')
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



