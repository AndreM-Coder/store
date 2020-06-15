@section('css')
@include('datatables.datatables_css')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="pull-left">Products</h1>
                    <h1 class="pull-right">
                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('products.create') }}">Add New</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Product Id</th>
        <th>Category Id</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $products )
            <tr>
                <td>{{ $products->product_id }}</td>
            <td>{{ $products->category_id }}</td>
            <td>{{ $products->description }}</td>
            <td>{{ $products->price }}</td>
            <td>{{ $products->stock }}</td>
                <td>
                    {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('products.show', [$products->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-eye"></i></a>
                        <a href="{{ route('products.edit', [$products->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-edit"></i></a>
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
$('#products-table').DataTable({
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
