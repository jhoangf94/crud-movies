@extends('layouts.app')

@section('content')
    
    <div class="col-md-8 mx-auto pt-5">
        <div class="card">
            <div class="card-header">
                <h2>New Movie</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('movies.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea  class="form-control" name="description" id="description" rows="5" >{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="text" class="form-control" name="year" id="year" value="{{ old('year') }}">
                    </div>

                    <input type="submit" class="btn btn-primary btn-block" value="Create">
                </form>
            </div>
        </div>
    </div>

@endsection