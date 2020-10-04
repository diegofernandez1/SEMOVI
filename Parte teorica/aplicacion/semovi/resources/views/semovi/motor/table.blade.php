<div class="row">
    <div class="container col-md-12">
        <table id="datatable" class="table table-striped table-bordered dataTable dislay" style="width: 100%">
            <thead class="text-primary">
                <th>Id</th>
                <th>Cilindros del motor</th>
                <th>Litros del motor</th>
            </thead>
            <tbody>
                @foreach($motores as $motor)
                <tr>
                    <td>{!! $motor->id!!}</td>
                    <td>{!! $motor->cilindraje !!}</td>
                    <td>{!! $motor->litros_motor !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
