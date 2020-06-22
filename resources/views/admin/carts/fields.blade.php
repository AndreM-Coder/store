<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Main Settings</h3>
            </div>
            <div class="card-body">
<!-- User Id Field -->
<div class="form-group ">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::select('user_id', \App\User::pluck('name', 'id') , null, ['class' => 'form-control
    select2']) !!}
</div>

<!-- Product Id Field -->
<div class="form-group ">
    {!! Form::label('product_id', 'Product Id:') !!}
    {!! Form::select('product_id', \App\Models\Products::pluck('product_id', 'id') , null, ['class' => 'form-control
    select2']) !!}
</div>

<!-- Product Amount Field -->
<div class="form-group ">
    {!! Form::label('product_amount', 'Product Amount:') !!}
    {!! Form::number('product_amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group ">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('carts.index') }}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>
</div>
</div>
