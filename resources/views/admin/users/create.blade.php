@extends('admin.app')
@section('title', 'Add New User')
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'users.store']) !!}

                        @include('users.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
