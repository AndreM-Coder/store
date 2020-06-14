@extends('admin.app')
@section('title', 'Edit Picture')
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($pictures, ['route' => ['pictures.update', $pictures->id], 'method' => 'patch', 'files' => 'true']) !!}

                        @include('pictures.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection