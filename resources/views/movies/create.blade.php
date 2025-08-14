@include('templates.base')
@include('templates.navbar')

<link rel="stylesheet" href="{{ asset('css/movies-create.css') }}">

<div class="movie-edit-container">
    <h1 class="movie-edit-title">Add New Movie</h1>

    <div class="movie-error">
        @if ($errors->any())
            <div class="movie-alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form action="{{ route('movies.store') }}" method="POST" class="movie-edit-form">
        @csrf
        @method('POST')

        <div class="movie-edit-field">
            <label for="name" class="movie-edit-label">Name</label>
            <input type="text" class="movie-edit-input" id="name" name="name" required>
        </div>

        <div class="movie-edit-field">
            <label for="synopsis" class="movie-edit-label">Synopsis</label>
            <textarea class="movie-edit-textarea" id="synopsis" name="synopsis" required></textarea>
        </div>

        <div class="movie-edit-field">
            <label for="year" class="movie-edit-label">Year</label>
            <input type="number" class="movie-edit-input" id="year" name="year" required>
        </div>

        <div class="movie-edit-field">
            <label for="category" class="movie-edit-label">Category</label>
            <input type="text" class="movie-edit-input" id="category" name="category" required>
        </div>

        <div class="movie-edit-field">
            <label for="cover_image" class="movie-edit-label">Cover Image URL</label>
            <input type="text" class="movie-edit-input" id="cover_image" name="cover_image" required>
        </div>

        <div class="movie-edit-field">
            <label for="trailer_link" class="movie-edit-label">Trailer Link</label>
            <input type="text" class="movie-edit-input" id="trailer_link" name="trailer_link" required>
        </div>

        <button type="submit" class="movie-btn-update">Add Movie</button>
    </form>

    <a href="{{ route('movies') }}" class="movie-btn-back">Back to Movie List</a>
</div>

@include('templates.footer')