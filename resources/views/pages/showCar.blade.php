@extends('layouts.app')

@section('title', "{$car->brand->title} {$car->title}")


@section('content')

    <div class="container">
        <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Information about your car
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Vin</th>
                                        <th>Year</th>
                                        <th>HP</th>
                                        <th>Price</th>
                                        <th>Country</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>{{ $car->title }}</td>
                                        <td>{{ $car->vin }}</td>
                                        <td>{{ $car->year}}</td>
                                        <td>{{ $car->horsepower}}</td>
                                        <td>{{ $car->price}}</td>
                                        <td>{{ $car->country->name}}</td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <img src="{{asset('images/' . $car->foto_path) }}" class="img-fluid" alt="Responsive image">
                </div>

            <a class="btn-primary btn" href="{{route('makeOrder', ['id'=>$car->id])}}">Make an order!</a>
        </div>
    </div>

@endsection
