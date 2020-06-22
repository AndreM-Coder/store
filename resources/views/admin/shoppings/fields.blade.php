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

<!-- Delivery Address Field -->
<div class="form-group ">
    {!! Form::label('delivery_address', 'Delivery Address:') !!}
    {!! Form::text('delivery_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group ">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Products Qty Field -->
<div class="form-group ">
    {!! Form::label('products_qty', 'Products Qty:') !!}
    {!! Form::number('products_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group ">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', $shopping->purchaseStatus , null, ['class' => 'form-control
    select2']) !!}
</div>

<!-- Delivery Date Field -->
<div class="form-group ">
    {!! Form::label('delivery_date', 'Delivery Date:') !!}
    {!! Form::date('delivery_date', null, ['class' => 'form-control','id'=>'delivery_date']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shoppings.index') }}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>
</div>
</div>