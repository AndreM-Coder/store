
<div class="row">
    <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Main Settings</h3>
            </div>
            <div class="card-body">
<!-- Product Id Field -->
<div class="form-group ">
    {!! Form::label('product_id', 'Product ID code:') !!}
    {!! Form::number('product_id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group ">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group ">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::select('category_id', \App\Models\Category::pluck('name', 'id'), 1, ['class' => 'form-control select2']) !!}
</div>

<!-- Description Field -->
<div class="form-group ">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group ">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Field -->
<div class="form-group ">
    {!! Form::label('stock', 'Stock:') !!}
    {!! Form::number('stock', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('products.index') }}" class="btn btn-default">Cancel</a>
</div>
</div>
</div>
</div>
</div>