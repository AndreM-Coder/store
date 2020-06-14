@section('css')
<!-- Date Picker -->
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection
<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Picture Settings</h3>
            </div>
            <div class="card-body">
                <!-- User Id Field -->
                <div class="form-group ">
                    {!! Form::label('user_id', 'User Id:') !!}
                    {!! Form::select('user_id', \App\User::pluck('name', 'id') , null, ['class' => 'form-control
                        select2']) !!}
                </div>
                <!-- Name Field -->
                <div class="form-group ">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Path Field -->
                <div class="form-group ">
                    {!! Form::label('path', 'Picture') !!}
                    <br>
                    {!! Form::file('path', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Type Field -->
                <div class="form-group ">
                    {!! Form::label('type', 'Type:') !!}
                    {!! Form::number('type', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Status Field -->
                <div class="form-group ">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::number('status', null, ['class' => 'form-control']) !!}
                </div>
                <!-- Submit Field -->
                <div class="row">
                    <!-- Submit Field -->
                    <div class="col-md-6">
                        {{Form::button('<i class="fas fa-plus-circle"></i> '.__('Save'),['type'=>'submit','class'=>'btn-lg btn-block btn-success'])}}
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('pictures.index') }}" class="btn-lg btn-block btn-info text-center"><i
                                class="fas fa-minus-circle"></i> Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>