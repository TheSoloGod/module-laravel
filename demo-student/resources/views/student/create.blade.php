@extends ('home')

@section('title')
Them hoc sinh moi
@endsection

@section('content')
    <h1>Them hoc sinh moi</h1>
    <form method="post" action="{{ route('student.store') }}">
        @csrf
        Ten: <input type="text" name="name">
        <br>
        Tuoi: <input type="number" name="age">
        <br>
        Thanh pho: <select name="city_id">
            @foreach($cities as $key => $value)
                <option value="{{$value->id}}">
                    {{ $value->name }}
                </option>
            @endforeach
        </select>
        <button type="submit">Them</button>
    </form>
@endsection
