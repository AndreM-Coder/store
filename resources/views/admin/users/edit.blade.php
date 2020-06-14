@extends('admin.app')
@section('title', 'Edit User')
@section('content')
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
                   {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

                        @include('users.fields')

                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection