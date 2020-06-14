@section('css')
@include('layouts.datatables_css')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {!! Form::open(array('url' => route('upload-image'),'files'=>'true' )) !!}
                    {!! Form::file('images[]',['multiple']) !!}
                    {!! Form::submit('Upload Images', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="pictures-table">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pictures as $picture)
                                <tr>
                                    <td>{{ $picture->user->name }}</td>
                                    <td><img src="{{$picture->path}}"
                                            style="width:100px;max-height:120px"></td>
                                    <td>{{ $picture->path}}</td>
                                    <td>
                                        {!! Form::open(['route' => ['pictures.destroy', $picture->id], 'method' =>
                                        'delete']) !!}
                                        <div class='btn-group'>
                                            {!! Form::button('<i class="nav-icon far fa-trash-alt"></i>', ['type' =>
                                            'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return
                                            confirm('Are you sure?')"]) !!}
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
@include('layouts.datatables_js')
<script>
    $(document).ready( function () {
$('#pictures-table').DataTable({
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