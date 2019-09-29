@extends ('home')

@section('title')
    Hien thi danh sach thanh pho
    @endsection

@section('content')
    <h1>Danh sach thanh pho</h1>
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Country</th>
        </tr>
        @foreach( $cities as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->country }}</td>
            </tr>
            @endforeach
    </table>
    @endsection
