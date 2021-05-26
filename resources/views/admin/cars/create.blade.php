@extends('layouts.admin')

@section('title', 'Cars')

@section('content')

    <form method="POST" enctype="multipart/form-data" action="#" novalidate>
        @csrf
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title"  placeholder="Enter a title">
            @if ($errors->has('title'))
                <span class="help-block text-danger">
                            {{ $errors->first('title')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Vin</label>
            <input type="text" name="vin" class="form-control{{ $errors->has('vin') ? ' is-invalid' : '' }}" id="vin"  placeholder="Enter a vin code">
            @if ($errors->has('vin'))
                <span class="help-block text-danger">
                            {{ $errors->first('vin')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Year</label>
            <input type="text" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year"  placeholder="Enter a year">
            @if ($errors->has('year'))
                <span class="help-block text-danger">
                            {{ $errors->first('year')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Horsepower</label>
            <input type="text" name="horsepower" class="form-control{{ $errors->has('horsepower') ? ' is-invalid' : '' }}" id="horsepower"  placeholder="Enter horsepower">
            @if ($errors->has('horsepower'))
                <span class="help-block text-danger">
                            {{ $errors->first('horsepower')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="title">Price</label>
            <input type="text" name="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" id="price"  placeholder="Enter price">
            @if ($errors->has('price'))
                <span class="help-block text-danger">
                            {{ $errors->first('price')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="brand">Brand</label>
            <div class="input-group" id="brand_id">
                <select class="custom-select form-control{{ $errors->has('brand_id') ? ' is-invalid' : '' }}" name="brand_id" id="brand" aria-label="Default select example">
                    @foreach( $brands as $id => $brand)
                        <option value="{{$id}}">{{$brand}}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->has('brand_id'))
                <span class="help-block text-danger">
                            {{ $errors->first('brand_id')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <div class="input-group" id="country_id">
                <select class="custom-select form-control{{ $errors->has('brand_id') ? ' is-invalid' : '' }}" name="country_id" id="country" aria-label="Default select example">
                    @foreach( $countries as $id => $country)
                        <option value="{{$id}}">{{$country}}</option>
                    @endforeach
                </select>
            </div>
            @if ($errors->has('country_id'))
                <span class="help-block text-danger">
                            {{ $errors->first('country_id')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="title">Year</label>
            <input type="file" name="photo" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" id="photo"  placeholder="Select photo">
            @if ($errors->has('photo'))
                <span class="help-block text-danger">
                            {{ $errors->first('photo')}}
                </span>
            @endif
        </div>




        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
