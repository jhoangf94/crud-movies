@extends('layouts.app')

@section('content')
    
   <div class="card">
       <div class="card-header">
           <h2>Movies</h2>
       </div>
       <div class="col-md-4 py-2">  
            <a class="btn btn-primary" href="/movies/create">New Movie</a>
       </div>
       <div class="card-body">     
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Year</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($movies as $movie)
                    <tr>
                        <th scope="row">{{ $movie->id}}</th>
                        <td>{{ $movie->title}}</td>
                        <td>{{ $movie->description}}</td>
                        <td>{{ $movie->year}}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('movies.edit', ['id'=>$movie->id]) }}">Edit</a>
                            <form action="/movies/{{ $movie->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr> 
                @endforeach
              
            </tbody>
          </table>
       </div>
   </div>


@endsection