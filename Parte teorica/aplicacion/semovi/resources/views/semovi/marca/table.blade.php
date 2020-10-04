<div class="row">
    <div class="container col-md-12">
        <table id="datatable" class="table table-striped table-bordered dataTable dislay" style="width: 100%">
            <thead class="text-primary">

                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicación</th>
                <th>Editar</th>
            </thead>
            <tbody>
                @foreach($marcas_direccion as $marcas)
                <tr>
                    <td>{!!$marcas->idMarca->id!!}</td>
                    <td>{!! $marcas->idMarca->nombre !!}</td>
                    <td>{!! ' Calle: '.$marcas->idDireccion->calle.' '.$marcas->idDireccion->num_ext.' Int.'.$marcas->idDireccion->num_int.
                     ' Asent. '.$marcas->idDireccion->asentamiento.' Municipio: '.$marcas->idDireccion->municipio.' Estado: '.$marcas->idDireccion->estado.
                     ' CP. '.$marcas->idDireccion->codigo_postal!!}</td>

                    <td>
                        {!! Form::open(['route' => ['editar_marca'], 'method' => 'POST']) !!}
                            @csrf
                            @method('POST')
                            {!! Form::hidden('idMarcaDirEditar', $marcas->id, ['class' => 'form-control', 'id' => 'idMarcaDirEditar']) !!}
                            <button type="submit" rel="tooltip" class="btn btn-secondary" href="{!! route('editar_marca') !!}" data-original-title="" title="">
                                <p>Editar</p>
                            </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
