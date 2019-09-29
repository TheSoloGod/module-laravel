@extends('home')
@section('title')
Danh sach thanh pho
@endsection

@section('content')
    <h1>Danh sach thanh pho</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Quoc gia</th>
        </tr>
        @foreach($cities as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->country }}</td>
                <td><a href="{{ route('city.edit', [$value->id]) }}">Sua</a></td>
                <td><a href="{{ route('city.delete', [$value->id]) }}">Xoa</a></td>
            </tr>
        @endforeach
        <a href="{{ route('city.create') }}">Them thanh pho moi</a>
    </table>
@endsection
