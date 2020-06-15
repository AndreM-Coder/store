@extends('admin.app')
@section('title', 'Edit Purchase')
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($shopping, ['route' => ['shoppings.update', $shopping->id], 'method' => 'patch']) !!}

                        @include('admin.shoppings.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection