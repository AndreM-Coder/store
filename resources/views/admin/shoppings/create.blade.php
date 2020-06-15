@extends('admin.app')
@section('title', 'Create New Purchase')
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'shoppings.store']) !!}

                        @include('admin.shoppings.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
