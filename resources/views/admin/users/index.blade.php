@extends('admin.app')
@section('title', 'Users Table')
@section('content')
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.users.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

