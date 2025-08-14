@include('templates.base')
@include('templates.navbar')

<link rel="stylesheet" href="{{ asset('css/edit-movie.css') }}">

<div class="movie-edit-container">
    <h1 class="movie-edit-title">Edit Movie</h1>

    <form action="{{ route('movies.update', $movie->id) }}" method="POST" class="movie-edit-form">
        @csrf
        @method('POST')

        <div class="movie-edit-field">
            <label for="name" class="movie-edit-label">Name</label>
            <input type="text" class="movie-edit-input" id="name" name="name" value="{{ $movie->name }}" required>
        </div>

        <div class="movie-edit-field">
            <label for="synopsis" class="movie-edit-label">Synopsis</label>
            <textarea class="movie-edit-textarea" id="synopsis" name="synopsis"
                required>{{ $movie->synopsis }}</textarea>
        </div>

        <div class="movie-edit-field">
            <label for="year" class="movie-edit-label">Year</label>
            <input type="number" class="movie-edit-input" id="year" name="year" value="{{ $movie->year }}" required>
        </div>

        <div class="movie-edit-field">
            <label for="category" class="movie-edit-label">Category</label>
            <input type="text" class="movie-edit-input" id="category" name="category" value="{{ $movie->category }}"
                required>
        </div>

        <div class="movie-edit-field">
            <label for="cover_image" class="movie-edit-label">Cover Image URL</label>
            <input type="text" class="movie-edit-input" id="cover_image" name="cover_image"
                value="{{ $movie->cover_image }}" required>
        </div>

        <div class="movie-edit-field">
            <label for="trailer_link" class="movie-edit-label">Trailer Link</label>
            <input type="text" class="movie-edit-input" id="trailer_link" name="trailer_link"
                value="{{ $movie->trailer_link }}" required>
        </div>

        <button type="submit" class="movie-btn-update">Update Movie</button>
    </form>

    <a href="{{ route('movies') }}" class="movie-btn-back">Back to Movie List</a>
</div>

@include('templates.footer')