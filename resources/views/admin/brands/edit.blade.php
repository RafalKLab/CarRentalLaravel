@extends('layouts.admin')

@section('title', 'Brands')

@section('content')
    <form method="POST" action="{{route('BrandEdit', ['id'=>$brand->id])}}" novalidate>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title"  placeholder="Enter a title" value="{{$brand->title}}">
            @if ($errors->has('title'))
                <span class="help-block text-danger">
                            {{ $errors->first('title')}}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="description">Website</label>
            <input type="text" name="website" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}" id="website" placeholder="Website" value="{{$brand->website}}">
            @if ($errors->has('website'))
                <span class="help-block text-danger">
                            {{ $errors->first('website')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Owner</label>
            <input type="text" name="owner" class="form-control{{ $errors->has('owner') ? ' is-invalid' : '' }}" id="description" placeholder="owner" value="{{$brand->owner}}">
            @if ($errors->has('owner'))
                <span class="help-block text-danger">
                            {{ $errors->first('owner')}}
                </span>
            @endif
        </div>

        <div class="form-group">
            <label for="description">Year</label>
            <input type="text" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" id="year" placeholder="Year" value="{{$brand->year}}">
            @if ($errors->has('year'))
                <span class="help-block text-danger">
                            {{ $errors->first('year')}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
