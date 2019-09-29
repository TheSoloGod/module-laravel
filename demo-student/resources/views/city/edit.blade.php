@extends ('home')

@section('title')
    Sua thong tin thanh pho
@endsection

@section('content')
    <h1>Sua thong tin thanh pho</h1>
    <form method="post" action="{{ route('city.update') }}">
        @csrf
        <input type="hidden" value="{{$city->id}}" name="id"><br>
        Ten: <input type="text" name="name" value="{{$city->name}}"><br>
        Thanh pho: <input type="text" name="country" value="{{$city->country}}"><br>
        <button type="submit">Sua</button>
    </form>
@endsection
