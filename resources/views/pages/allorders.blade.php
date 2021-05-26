@extends('layouts.app')

@section('title', "All orders")


@section('content')

    @foreach($orders as $order)
        <br>
        {{$order->id}}
        {{$order->user_id}}
        {{$order->car_id}}
    @endforeach


@endsection
