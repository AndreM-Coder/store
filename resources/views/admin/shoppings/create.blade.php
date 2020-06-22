@extends('admin.app')
@section('title', 'Create New Purchase')
@section('content')
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                    {!! Form::open(['route' => 'shoppings.store']) !!}
                    @php
                    $shopping = new \App\Models\Shopping;
                    @endphp
                        @include('admin.shoppings.fields')

                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
