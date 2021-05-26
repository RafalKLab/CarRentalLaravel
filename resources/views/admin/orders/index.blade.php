@extends('layouts.admin')

@section('title', 'Orders')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Order id</th>
                        <th>User id</th>
                        <th>Car id</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $item) {{-- iš valdiklio gavom autorių masyvą $authors; kadangi tai masyvas, reikia jį išskaidyti elementais --}}
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->car_id }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
