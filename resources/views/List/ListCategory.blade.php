@extends("layout")

@section("main_content")

    <table class="table table-hover">
        <h1 style="text-align: center;color: red">Sanh dach Category</h1>
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Content</th>
        <th>Images</th>
        <th>Describe</th>
        <th>Status</th>
        <th>active</th>


        </thead>

        <tbody>

        @foreach($categorys as $Category)

            <tr>

                <td>{{$Category->category_id}}</td>
                <td>{{$Category->category_name}}</td>
                <td>{{$Category->content}}</td>
                <td>{{$Category->images}}</td>
                <td>{{$Category->describe}}</td>
                <td>{{$Category->status}}</td>
                <td>{{$Category->active}}</td>


            </tr>

        @endforeach

        </tbody>

    </table>


@endsection