@extends ('layouts.app')

@section('content')
    <h1>Cars list</h1>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        @foreach($cars as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->price }}</td>
            </tr>
            @endforeach
    </table>
    <a href="{{route('car.create')}}">Create new car</a>
@endsection
