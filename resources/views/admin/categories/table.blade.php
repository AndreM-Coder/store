@section('css')
@include('datatables.datatables_css')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="pull-right">
                       <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('categories.create') }}">Add New</a>
                    </h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
    <table class="table" id="categories-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Discount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
            <td>{{ $category->discount }} %</td>
                <td>
                    {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categories.show', [$category->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-eye"></i></a>
                        <a href="{{ route('categories.edit', [$category->id]) }}" class='btn btn-default btn-xs'><i class="nav-icon far fa-edit"></i></a>
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
$('#categories-table').DataTable({
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
