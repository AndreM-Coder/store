<div class="table-responsive">
    <table class="table" id="carts-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Product Id</th>
        <th>Product Amount</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($carts as $cart)
            <tr>
                <td>{{ $cart->user_id }}</td>
            <td>{{ $cart->product_id }}</td>
            <td>{{ $cart->product_amount }}</td>
            <td>{{ $cart->total }}</td>
                <td>
                    {!! Form::open(['route' => ['carts.destroy', $cart->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('carts.show', [$cart->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('carts.edit', [$cart->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
