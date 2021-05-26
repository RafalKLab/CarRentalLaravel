@extends('layouts.admin')

@section('title', 'Countries')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{route('AdminCountryCreate')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Add Country</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($countries as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{route('AdminCountryDelete', ['id'=>$item->id])}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-danger my-2" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $countries->links('pagination::bootstrap-4')}}
            </div>
        </div>
    </div>
@endsection
