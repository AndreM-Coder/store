@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Admin panel</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>{{$totalUsers}}</h3>
                                        <p>Total Users</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a href="{{ route('users.index') }}" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3>{{$todayUsers}}</h3>
                                        <p>Members Registration Today</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <a href="{{route('users-today')}}" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h3>{{$totalCategories}}</h3>
                                        <p>Total Pictures</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-images"></i>
                                    </div>
                                    <a href="{{ route('pictures.index') }}" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h3>{{$totalProducts}}</h3>
                                        <p>Total Products</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-images"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-blue">
                                    <div class="inner">
                                        <h3>#</h3>
                                        <p>Total Edits</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-edit"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- small box -->
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3>#</h3>
                                        <p>Total Visits</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More Info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@endsection