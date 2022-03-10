<table>
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $key => $user)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$user->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
