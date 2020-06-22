@extends('admin.app')
@section('title', 'Purchase List')

@section('content')
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('admin.shoppings.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

