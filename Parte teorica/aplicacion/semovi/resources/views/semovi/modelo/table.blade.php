<div class="row">
    <div class="container col-md-12">
        <table id="datatable" class="table table-striped table-bordered dataTable dislay" style="width: 100%">
            <thead class="text-primary">
                <th>Id</th>
                <th>Marca constructora</th>
                <th>Nombre del modelo </th>
                <th>Ver detalles</th>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr>

                    <td>{!! $marca->id!!}</td>
                    <td>{!! $marca->idMarca->nombre !!}</td>
                    <td>{!! $marca->nombre_modelo !!}</td>

                    <td>
                        {!! Form::open(['route' => ['ver_modelo'], 'method' => 'POST']) !!}
                            @csrf
                            @method('POST')
                            {!! Form::hidden('idModeloVer', $marca->id, ['class' => 'form-control', 'id' => 'idModeloVer']) !!}
                            <button type="submit" rel="tooltip" class="btn btn-secondary" href="{!! route('ver_modelo') !!}" data-original-title="" title="">
                                <p>Ver</p>
                            </button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
