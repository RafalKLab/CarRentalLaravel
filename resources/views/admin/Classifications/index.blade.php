@extends('layouts.admin')

@section('title', 'Classifications')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('ClassificationsCreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Classification</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($classifications as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td><a class="btn btn-primary my-2" href="{{route('ClassificationsEdit', ['id'=>$item->id])}}">Edit</a></td>
                            <td>
                                <form action="{{route('ClassificationsDelete', ['id'=>$item->id])}}" method="POST">
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
