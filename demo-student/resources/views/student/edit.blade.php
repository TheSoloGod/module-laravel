@extends ('home')

@section('title')
    Sua thong tin hoc sinh
    @endsection

@section('content')
    <h1>Sua thong tin hoc sinh</h1>
    <form method="post" action="{{ route('student.update') }}">
        @csrf
        <input type="hidden" value="{{$student->id}}" name="id"><br>
        Ten: <input type="text" name="name" value="{{$student->name}}"><br>
        Tuoi: <input type="number" name="age" value="{{$student->age}}"><br>
        Thanh pho: <select name="city_id">
            @foreach($cities as $key => $value)
                <option
                    @if($student->city_id == $value->id)
                    {{'selected'}}
                    @endif
                    value = "{{ $value->id }}">
                    {{$value->name}}
                </option>
            @endforeach
        </select><br>
        <button type="submit">Sua</button>
    </form>
    @endsection
