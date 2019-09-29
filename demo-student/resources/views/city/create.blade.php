@extends ('home')

@section('title')
Them thanh pho moi
@endsection

@section('content')
    <h1>Them thanh pho moi</h1>
    <form method="post" action="{{ route('city.store') }}">
        @csrf
        Ten: <input type="text" name="name">
        <br>
        Quoc gia: <input type="text" name="country">
        <br>
        <button type="submit">Them</button>
    </form>
@endsection
