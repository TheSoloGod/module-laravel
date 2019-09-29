@extends ('home')

@section('title')
    Xoa hoc sinh
    @endsection

@section('content')
    <h1>Chac chan muon xoa hoc sinh "{{$student->name}}" ?</h1>
    <form method="post" action="{{route('student.destroy')}}">
        @csrf
        <input type="hidden" name="id" value="{{$student->id}}">
        <button type="submit">Xoa</button>
        <a href="{{route('student.list')}}">Huy</a>
    </form>
    @endsection
