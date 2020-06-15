@extends('admin.app')
@section('title', 'Create Shopping Cart')
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'carts.store']) !!}

                        @include('admin.carts.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
