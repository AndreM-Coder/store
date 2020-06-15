@extends('admin.app')
@section('title', 'Edit Shopping Cart')
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($cart, ['route' => ['carts.update', $cart->id], 'method' => 'patch']) !!}

                        @include('admin.carts.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection