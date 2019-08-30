@extends("layout")

@section("main_content")

    <table class="table table-hover">
        <h1 style="text-align: center;color: red">Sanh dach Product</h1>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Detail</th>
        <th>Images</th>
        <th>Price</th>
        <th>PriceNew</th>
        <th>Date</th>
        <th>Status</th>
        <th>Active</th>

        </thead>

        <tbody>

        @foreach($Products as $Product)

            <tr>

                <td>{{$Product->product_id}}</td>
                <td>{{$Product->product_name}}</td>
                <td>{{$Product->category_id}}</td>
                <td>{{$Product->images}}</td>
                <td>{{$Product->price}}</td>
                <td>{{$Product->priceNew}}</td>
                <td>{{$Product->date}}</td>
                <td>{{$Product->status}}</td>
                <td>{{$Product->active}}</td>

            </tr>

        @endforeach

        </tbody>

    </table>


@endsection