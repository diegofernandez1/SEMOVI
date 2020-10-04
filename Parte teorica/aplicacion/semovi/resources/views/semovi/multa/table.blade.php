<div class="row">
    <div class="container col-md-12">
        <table id="datatable" class="table table-striped table-bordered dataTable dislay" style="width: 100%">
            <thead class="text-primary">

                <th>Número de Expediente</th>
                <th>Artículo Infringido </th>
                <th>Descripción</th>
                <th>RFC del Infractor</th>
                <th>Número del agente que asignó la multa</th>
                <th>Fecha de la multa</th>
                <th>Calle</th>
                <th>Municipio</th>
                <th>Ver detalles</th>
                <th>Eliminar</th>
            </thead>
            <tbody>
                @foreach($infracciones as $infraccion)
                <tr>

                    <td>{!! $infraccion->numero_expediente!!}</td>
                    <td>{!! $infraccion->numeroArticulo->numero !!}</td>
                    <td>{!! $infraccion->numeroArticulo->descripcion !!}</td>
                    <td>{!! $infraccion->idInfractor->rfc !!}</td>
                    <td>{!! $infraccion->numeroAgente->numero_agente !!}</td>
                    <td>{!! $infraccion->fecha !!}</td>
                    <td>{!! $infraccion->calle !!}</td>
                    <td>{!! $infraccion->municipio !!}</td>

                    <td>
                        {!! Form::open(['route' => ['editar_multas'], 'method' => 'POST']) !!}
                            @csrf
                            @method('POST')
                            {!! Form::hidden('numeroExpedienteInfraccionEditar', $infraccion->numero_expediente, ['class' => 'form-control', 'id' => 'numeroExpedienteInfraccionEditar']) !!}
                            <button type="submit" rel="tooltip" class="btn btn-secondary" href="{!! route('editar_multas') !!}" data-original-title="" title="">
                                <p>Ver</p>
                            </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {!! Form::open(['route' => ['eliminar_multa'], 'method' => 'POST']) !!}
                            @csrf
                            @method('POST')
                            {!! Form::hidden('numeroExpedienteInfraccionEliminar', $infraccion->numero_expediente, ['class' => 'form-control', 'id' => 'numeroExpedienteInfraccionEliminar']) !!}
                            <button type="submit" rel="tooltip" class="btn btn-danger" href="{!! route('eliminar_multa') !!}" data-original-title="" title="">
                                <p>Eliminar</p>
                            </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
