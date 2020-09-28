@section('content')
    <table>
        <tr><th>id</th><th>date</th><th>order</th><th>pref_id</th><th>shipping_companies_id</th></tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->date}}</td>
            <td>{{$order->order}}</td>
            <td>{{$order->pref_id}}</td>
            <td>{{$order->shippind_companies_id}}</td>

        </tr>
    </table>
@endsection