@extends('layouts.admin')

@section('title', 'Country')

@section('content')
    <form method="POST" action="{{route('AdminCountryCreate')}}" novalidate>
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" id="title"  placeholder="Enter a title">
            @if ($errors->has('title'))
                <span class="help-block text-danger">
                            {{ $errors->first('title')}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
