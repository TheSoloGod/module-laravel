@extends ('home')

@section('title')
    Xoa thanh pho
    @endsection

@section('content')
    <h1>Chac chan muon xoa thanh pho "{{$city->name}}" ?</h1>
    <form method="post" action="{{route('city.destroy')}}">
        @csrf
        <input type="hidden" name="id" value="{{$city->id}}">
        <button type="submit">Xoa</button>
        <a href="{{route('city.list')}}">Huy</a>
    </form>
    @endsection
