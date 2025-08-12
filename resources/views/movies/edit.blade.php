@include('templates.base')
@include('templates.navbar')

<div class="container mt-4">
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.update', $movie->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $movie->name }}" required>
        </div>

        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" required>{{ $movie->synopsis }}</textarea>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $movie->year }}" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $movie->category }}"
                required>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image URL</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image"
                value="{{ $movie->cover_image }}" required>
        </div>
        <div class="mb-3">
            <label for="trailer_link" class="form-label">Trailer Link</label>
            <input type="text" class="form-control" id="trailer_link" name="trailer_link"
                value="{{ $movie->trailer_link }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>
    <a href="{{ route('movies') }}" class="btn btn-secondary mt-3">Back to Movie List</a>
</div>