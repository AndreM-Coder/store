@extends('admin.app')
@section('title', 'Create New Product')

@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'products.store']) !!}

                        @include('admin.products.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
