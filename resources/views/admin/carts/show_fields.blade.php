<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $cart->user_id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $cart->product_id }}</p>
</div>

<!-- Product Amount Field -->
<div class="form-group">
    {!! Form::label('product_amount', 'Product Amount:') !!}
    <p>{{ $cart->product_amount }}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{{ $cart->total }}</p>
</div>

