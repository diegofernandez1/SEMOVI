<div class="row">
    <div class="container col-md-12">
        <table id="datatable" class="table table-striped table-bordered dataTable dislay" style="width: 100%">
            <thead class="text-primary">

                <th>RFC</th>
                <th>Nombre </th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Fecha de nacimiento</th>
                <th>Editar</th>
            </thead>
            <tbody>
                @foreach($propietarios as $propietario)
                <tr>

                    <td>{!! $propietario->rfc!!}</td>
                    <td>{!! $propietario->idPersona->nombre !!}</td>
                    <td>{!! $propietario->idPersona->apellido_paterno !!}</td>
                    <td>{!! $propietario->idPersona->apellido_materno !!}</td>
                    <td>{!! $propietario->fecha_nacimiento !!}</td>
                    <td>
                        {!! Form::open(['route' => ['editar_propietario'], 'method' => 'POST']) !!}
                            @csrf
                            @method('POST')
                            {!! Form::hidden('idPropietarioEditar', $propietario->id, ['class' => 'form-control', 'id' => 'idPropietarioEditar']) !!}
                            <button type="submit" rel="tooltip" class="btn btn-secondary" href="{!! route('editar_propietario') !!}" data-original-title="" title="">
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
