@extends('home')
@section('title')
Danh sach hoc sinh
@endsection

@section('content')
    <h1>Danh sach hoc sinh</h1>
{{--    <form method="get" action="">--}}
        @csrf
        <h3>Loc hoc sinh</h3>
        <select name="city_id">
            <option value="">Tat ca</option>
            @foreach($cities as $key => $value)
                <option value="{{ $value->id }}">
                    {{ $value->name }}
                </option>
            @endforeach
        </select>
        <button type="submit"><a href="{{route('student.filterByCity', [$value->id])}}">Loc</a></button>
{{--    </form>--}}
    <table border="1">
        <tr>
            <th>STT</th>
            <th>Ten</th>
            <th>Tuoi</th>
            <th>Thanh pho</th>
        </tr>
        @foreach($students as $key => $value)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->city['name'] }}</td>
                <td><a href="{{ route('student.edit', [$value->id]) }}">Sua</a></td>
                <td><a href="{{ route('student.delete', [$value->id]) }}">Xoa</a></td>
            </tr>
        @endforeach
        <a href="{{ route('student.create') }}">Them hoc sinh moi</a>
    </table>
    {{ $students->appends(request()->query()) }}
@endsection

