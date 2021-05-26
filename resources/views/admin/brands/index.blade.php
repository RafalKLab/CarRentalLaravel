@extends('layouts.admin')

@section('title', 'Brands')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('AdminBrandsCreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Brand</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Website</th>
                        <th>Owner</th>
                        <th>Year</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($brands as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->website}}</td>
                            <td>{{ $item->owner}}</td>
                            <td>{{ $item->year}}</td>
                            <td><a class="btn btn-primary my-2" href="{{route('BrandEdit', ['id'=>$item->id])}}">Edit</a></td>
                            <td>
                                <form action="{{route('BrandDelete', ['id'=>$item->id])}}" method="POST">
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
