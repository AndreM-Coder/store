@extends('admin.app')

@section('content')
    <section class="content-header">
        <h1>
            Products
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($products, ['route' => ['products.update', $products->id], 'method' => 'patch']) !!}

                        @include('admin.products.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection