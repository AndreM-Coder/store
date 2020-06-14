<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $shopping->user_id }}</p>
</div>

<!-- Delivery Address Field -->
<div class="form-group">
    {!! Form::label('delivery_address', 'Delivery Address:') !!}
    <p>{{ $shopping->delivery_address }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $shopping->total }}</p>
</div>

<!-- Products Qty Field -->
<div class="form-group">
    {!! Form::label('products_qty', 'Products Qty:') !!}
    <p>{{ $shopping->products_qty }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $shopping->status }}</p>
</div>

<!-- Delivery Date Field -->
<div class="form-group">
    {!! Form::label('delivery_date', 'Delivery Date:') !!}
    <p>{{ $shopping->delivery_date }}</p>
</div>

