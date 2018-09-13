@extends('master')

@section('title')
    Services
@endsection

@section('content')
    <h2>Services</h2>

    @foreach($items as $item)
        <p>{{$item}}</p>
    @endforeach

@endsection