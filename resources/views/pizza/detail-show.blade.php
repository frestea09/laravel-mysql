@extends('layout.base')
@section('content')
    <div>
        <p>hello ini detail</p>
        @foreach ($listPizza as $item)
            <p>{{ $item['pizza_name'] }}</p>
        @endforeach
        <p><a href="/">Home</a></p>
        {{-- <p>{{$listPizza->pizza_name}}</p> --}}
    </div>
@endsection