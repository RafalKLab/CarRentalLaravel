@extends('layouts.admin')

@section('title', 'Cars')

@section('content')

    <img src="{{asset('images/' . $car->foto_path) }}" alt="" width="300px">


    <form method="POST" action="#" novalidate>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title"  placeholder="Enter a title" value="{{$car->title}}">
            @if ($errors->has('title'))
                <span class="help-block text-danger">
                            {{ $errors->first('title')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Vin</label>
            <input type="text" name="vin" class="form-control{{ $errors->has('vin') ? ' is-invalid' : '' }}" id="vin"  placeholder="Enter a vin code" value="{{$car->vin}}">
            @if ($errors->has('vin'))
                <span class="help-block text-danger">
                            {{ $errors->first('vin')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Year</label>
            <input type="text" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year"  placeholder="Enter a year" value="{{$car->year}}">
            @if ($errors->has('year'))
                <span class="help-block text-danger">
                            {{ $errors->first('year')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Horsepower</label>
            <input type="text" name="horsepower" class="form-control{{ $errors->has('horsepower') ? ' is-invalid' : '' }}" id="horsepower"  placeholder="Enter horsepower" value="{{$car->horsepower}}">
            @if ($errors->has('horsepower'))
                <span class="help-block text-danger">
                            {{ $errors->first('horsepower')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Price</label>
            <input type="text" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price"  placeholder="Enter price" value="{{$car->price}}">
            @if ($errors->has('price'))
                <span class="help-block text-danger">
                            {{ $errors->first('price')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <div class="input-group" id="brand_id">
                <select class="custom-select" name="brand_id" id="brand" aria-label="Default select example">
                    @foreach( $brands as $id => $brand)
                        <option value="{{$id}}"
                            @if($id==$car->brand_id)
                                selected
                            @endif
                        >{{$brand}} </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <div class="input-group" id="country_id">
                <select class="custom-select" name="country_id" id="country" aria-label="Default select example">
                    @foreach( $countries as $id => $country)
                        <option value="{{$id}}"
                                @if($id==$car->country_id)
                                selected
                            @endif
                        >{{$country}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection
