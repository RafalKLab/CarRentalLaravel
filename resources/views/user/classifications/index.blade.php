@extends('layouts.app')

@section('content')
    @foreach($classifications as $item)
        <p>{{ $item->title }} {{ $item->description }}</p>
    @endforeach
@endsection
