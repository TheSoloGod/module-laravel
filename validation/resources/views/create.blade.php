@extends ('layouts.app')

@section('content')
    <h1>Create new car</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('car.store')}}">
        @csrf
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        <button type="submit">Submit</button>
    </form>
    @endsection
