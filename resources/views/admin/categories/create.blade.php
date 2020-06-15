@extends('admin.app')
@section('title', 'Create Product Category')
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'categories.store']) !!}

                        @include('admin.categories.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
