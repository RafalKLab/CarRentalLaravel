@extends('layouts.admin')

@section('title', 'Cars')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('AdminCarsCreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Car</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Vin</th>
                        <th>Year</th>
                        <th>HP</th>
                        <th>Price</th>
                        <th>Brand</th>
                        <th>Country</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->vin }}</td>
                        <td>{{ $item->year }}</td>
                        <td>{{ $item->horsepower }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->brand->title }}</td>
                        <td>{{ $item->country->name }}</td>
                        <td><a class="btn btn-primary my-2" href="{{route('CarEdit', ['id'=>$item->id])}}">Edit</a></td>
                        <td>
                            <form action="{{route('CarDelete', ['id'=>$item->id])}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-danger my-2" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
