@extends('admin.app')
@section('title', 'Edit Product Category')
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'patch']) !!}

                        @include('admin.categories.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection