@section('css')
@include('datatables.datatables_css')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="pull-left">Purchases</h1>
                    <h1 class="pull-right">
                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('shoppings.create') }}">Add New</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
    <table class="table" id="shoppings-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Delivery Address</th>
        <th>Total</th>
        <th>Products Qty</th>
        <th>Status</th>
        <th>Delivery Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shoppings as $shopping)
            <tr>
                <td>{{ $shopping->user_id }}</td>
            <td>{{ $shopping->delivery_address }}</td>
            <td>{{ $shopping->total }}</td>
            <td>{{ $shopping->products_qty }}</td>
            <td>{{ $shopping->status }}</td>
            <td>{{ $shopping->delivery_date }}</td>
                <td>
                    {!! Form::open(['route' => ['shoppings.destroy', $shopping->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shoppings.show', [$shopping->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-eye"></i></a>
                        <a href="{{ route('shoppings.edit', [$shopping->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-edit"></i></a>
                        {!! Form::button('<i class="nav-icon far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection
@section('scripts')
@include('datatables.datatables_js')
<script>
$(document).ready( function () {
$('#shoppings-table').DataTable({
'paging'      : true,
'lengthChange': true,
'searching'   : true,
'ordering'    : true,
'info'        : true,
'autoWidth'   : true,
"order": [[ 0, "desc" ]],
"lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
});
} );

</script>
@endsection
