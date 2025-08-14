@include('templates.base')


<section class="sec1">
    @include('templates.navbar')
    <div class="midia">
        <img class="cover-image" src="{{ $cover->cover_image }}" alt="">
    </div>
    <div class="container">
        <h1 class="movie-name">{{ $cover->name }}</h1>
        <h2 class="movie-synopse">{{ $cover->synopsis }}</h2>
        <a class="see-details" href="">See Details</a>
    </div>
</section>

<section class="sec2">

    <div class="container-sec2">
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

</section>



@include('templates.footer')