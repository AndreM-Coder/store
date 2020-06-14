@extends('admin.app')

@section('content')
    <section class="content-header">
        <h1>
            Shopping
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($shopping, ['route' => ['shoppings.update', $shopping->id], 'method' => 'patch']) !!}

                        @include('admin.shoppings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection