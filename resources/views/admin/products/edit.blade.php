@extends('admin.app')
@section('title', 'Edit Product')

@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($products, ['route' => ['products.update', $products->id], 'method' => 'patch', 'files'=>'true']) !!}
                        {{$edit = 1}}
                        @include('admin.products.fields')
                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection