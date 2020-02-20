<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movie::all();

        return view('movies.index', [
            'movies' => $movies
        ]);
    }


    public function create()
    {
        return view('movies.create');
    }


    public function edit( $id )
    {
        $movie = Movie::findOrFail( $id );

        return view('movies.edit', [
            'movie' => $movie
        ]);
    }

 

    public function store( Request $request )
    {
        $movie = new Movie();
        $movie->title = $request->get('title');
        $movie->description = $request->get('description');
        $movie->year = $request->get('year');

        $movie->save();

       return redirect('/movies');
    }


    public function update( Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->get('title');
        $movie->description = $request->get('description');
        $movie->year = $request->get('year');

        $movie->save();

        return redirect('/movies'); 

    }


    public function destroy( $id )
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/movies'); 
    }
}
