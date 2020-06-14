<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Delivery Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_address', 'Delivery Address:') !!}
    {!! Form::text('delivery_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Products Qty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('products_qty', 'Products Qty:') !!}
    {!! Form::number('products_qty', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Delivery Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('delivery_date', 'Delivery Date:') !!}
    {!! Form::text('delivery_date', null, ['class' => 'form-control','id'=>'delivery_date']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#delivery_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('shoppings.index') }}" class="btn btn-default">Cancel</a>
</div>
