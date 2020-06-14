@section('css')
@include('layouts.datatables_css')
@endsection
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href="{{ route('users.create') }}">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="users-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Is Admin</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $users)
                                <tr>
                                    <td>{{ $users->name }}</td>
                                    <td>{{ $users->isAdmin() }}</td>
                                    <td>{{ $users->email }}</td>
                                    <td>{{ $users->phone }}</td>
                                    <td>{{ $users->address }} / {{ $users->city }} / {{ $users->country }} / {{ $users->post_code }}</td>
                                    <td>
                                        {!! Form::open(['route' => ['users.destroy', $users->id], 'method' => 'delete'])
                                        !!}
                                        <div class='btn-group'>
                                            <a href="{{ route('users.show', [$users->id]) }}"
                                                class='btn btn-default btn-xs'><i
                                                    class="nav-icon far fa-eye"></i></a>
                                            <a href="{{ route('users.edit', [$users->id]) }}"
                                                class='btn btn-default btn-xs'><i
                                                    class="nav-icon far fa-edit"></i></a>
                                            {!! Form::button('<i class="nav-icon far fa-trash-alt"></i>', ['type' =>
                                            'submit', 'class' =>
                                            'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"])
                                            !!}
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
        $('#users-table').DataTable({
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