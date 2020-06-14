@extends('admin.app')
@section('title', 'Add New Image')
@section('content')
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            {!! Form::open(['route' => 'pictures.store', 'files' => 'true']) !!}

            @include('pictures.fields')

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection