@extends('layouts.app')

@section('title', "Your orders")


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                @if(Auth::user()->cars()->count())
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header">
                                Your orders
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Vin</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach(Auth::user()->cars() as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->title }}</td>
                                        <td>{{ $car->vin }}</td>
                                        <td>{{ $car->year }}</td>
                                        <td>
                                            <form action="{{route('deleteOrder', ['id'=>$car->id])}}" method="POST">
                                                @csrf
                                                <input type="submit" class="btn btn-primary" value="Cancle">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                @else
                    You do not have any car orders yet!
                @endif

            </div>
            <div class="col-md-6">

            </div>


        </div>
    </div>

@endsection
