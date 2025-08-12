<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller {
    public function index() {
        $movies = Movie::all();

        return view('movies.index', compact('movies'));
    }

    public function list() {
        $movies = Movie::all();

        return $movies;
    }

    public function show($id) {
        $movie = Movie::findOrFail($id);

        return view('movies.show', compact('movie'));
    }

    public function create() {
        return view('movies.create');
    }

    public function store(Request $request) {
        
        // 'category' => 'required|exists:categories,id',
        // 'cover_image' => 'nullable|image|max:2048',
        // 'trailer_link' => 'nullable|url'
        
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'year' => 'required|integer',
            'category' => 'required|string',
            'cover_image' => 'nullable|string',
            'trailer_link' => 'nullable|string'
        ]);
        
        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $request->file('cover_image')->store('covers', 'public');
        }
        if ($request->has('trailer_link')) {
            $data['trailer_link'] = $request->input('trailer_link');
        }

        $movies = Movie::create($data);

        return $this->index();
    }

    public function edit($id) {
        $movie = Movie::findOrFail($id);

        return view('movies.edit', compact('movie'));
    }

    public function update(Request $request, $id) {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());

        return redirect()->route('movies');
    }

    public function destroy($id) {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return $this->index();    
    }

}
