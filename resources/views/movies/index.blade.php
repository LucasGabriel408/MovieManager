@include('templates.base')
@include('templates.navbar')

<div class="container mt-4">
    <h1 class="movies-title">Movie List</h1>
    <div class="movies-list">
        @foreach($movies as $movie)
            <div class="movie-item">
                <img src="{{ $movie->cover_image }}" alt="{{ $movie->name }}">
                <h3>{{ $movie->name }}</h3>
                <a href="{{ route('movies.show', ['id' => $movie->id]) }}">See Details</a>
            </div>
        @endforeach
    </div>
</div>

@include('templates.footer')    