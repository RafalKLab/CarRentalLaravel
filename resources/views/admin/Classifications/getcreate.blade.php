@extends('layouts.admin')

@section('title', 'Classifications')

@section('content')
    <form method="POST" action="{{route('ClassificationsCreate')}}" novalidate>
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
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" id="description" placeholder="Description">
            @if ($errors->has('description'))
                <span class="help-block text-danger">
                            {{ $errors->first('description')}}
                </span>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
