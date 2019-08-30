<h1>Danh sach user</h1>
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
        <th>email_verified_at</th>
        <th>password</th>
        <th>remember_token</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user -> id  }}</th>
            <td>{{$user -> name}}</td>
            <td> {{ $user -> email }}</td>
            <td>{{ $user -> password }}</td>
            <td>{{ $user -> email_verified_at }}</td>
            <td>{{$user -> password}}</td>
            <td>{{$user -> remember_token}}</td>
        </tr>
    @endforeach
    </tbody>
</table>