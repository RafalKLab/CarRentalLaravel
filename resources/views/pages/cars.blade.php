@extends('layouts.app')

@section('title', 'Make your choice!')

@section('content')

    <div class="container">
        <div class="row">
        @foreach( $cars as $car)
            @if($car->users()->count())
                @else
                    <div class="card mx-1 my-1" style="width: 18rem;">
                        <img src="{{asset('images/' . $car->foto_path) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->brand->title ." ".  $car->title }}</h5>
                            <h6 class="card-text">{{ $car->year }}</h6>
                            <h6 class="card-text">{{$car->price}} $/24h</h6>
                            <a href="{{route('showCar',['id' => $car->id])}}" class="btn btn-primary">Select</a>
                        </div>
                    </div>
                @endif
        @endforeach
        </div>
    </div>

@endsection
