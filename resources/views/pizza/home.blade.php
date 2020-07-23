@extends('layout.base')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        @foreach ($listPizza as $item)
             <p>{{$item['pizza_id']}} - {{$item['pizza_name']}}</p>
        @endforeach
    </div>
</div>
@endsection
