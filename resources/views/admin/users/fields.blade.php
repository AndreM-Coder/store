@section('css')
<!-- Date Picker -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection
<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">User Settings</h3>
            </div>
            <div class="card-body">
                <!-- Name Field -->
                <div class="form-group ">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Is Admin Field -->
                <div class="form-group ">
                    {!! Form::label('is_admin', 'Is Admin:') !!}
                    {!! Form::select('is_admin', $users->isAdmin, null, ['class' => 'form-control']) !!}
                </div>
                <!-- Email Field -->
                <div class="form-group ">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    {!! Form::label('city', 'City:') !!}
                    {!! Form::text('city', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    {!! Form::label('country', 'Country:') !!}
                    {!! Form::text('country', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    {!! Form::label('contact', 'Country:') !!}
                    {!! Form::number('contact', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group ">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::text('password', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Submit Field -->
                <div class="row">
                    <!-- Submit Field -->
                    <div class="col-md-6">
                        {{Form::button('<i class="fas fa-plus-circle"></i> '.__('Save'),['type'=>'submit','class'=>'btn-lg btn-block btn-success'])}}
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('users.index') }}" class="btn-lg btn-block btn-info text-center"><i
                                class="fas fa-minus-circle"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>