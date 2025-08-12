@include('templates.base')
@include('templates.navbar')

<div class="container mt-4">
    <h1>Edit Movie</h1>
    <form action="{{ route('movies.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="error">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        
        <div class="mb-3">
            <label for="synopsis" class="form-label">Synopsis</label>
            <textarea class="form-control" id="synopsis" name="synopsis" required></textarea>
        </div>
        
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="mb-3">
            <label for="cover_image" class="form-label">Cover Image URL</label>
            <input type="text" class="form-control" id="cover_image" name="cover_image" required>
        </div>
        <div class="mb-3">
            <label for="trailer_link" class="form-label">Trailer Link</label>
            <input type="text" class="form-control" id="trailer_link" name="trailer_link" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>
    <a href="{{ route('movies') }}" class="btn btn-secondary mt-3">Back to Movie List</a>
</div>