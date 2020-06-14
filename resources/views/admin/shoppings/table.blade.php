<div class="table-responsive">
    <table class="table" id="shoppings-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Delivery Address</th>
        <th>Total</th>
        <th>Products Qty</th>
        <th>Status</th>
        <th>Delivery Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($shoppings as $shopping)
            <tr>
                <td>{{ $shopping->user_id }}</td>
            <td>{{ $shopping->delivery_address }}</td>
            <td>{{ $shopping->total }}</td>
            <td>{{ $shopping->products_qty }}</td>
            <td>{{ $shopping->status }}</td>
            <td>{{ $shopping->delivery_date }}</td>
                <td>
                    {!! Form::open(['route' => ['shoppings.destroy', $shopping->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('shoppings.show', [$shopping->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('shoppings.edit', [$shopping->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
