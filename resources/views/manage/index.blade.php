@include('templates.base')
@include('templates.navbar')

<div class="movie-dashboard-container">
    <div class="movie-dashboard-header">
        <h1 class="movie-dashboard-title">Movie List</h1>
        <a href="{{ route('movies.create') }}" class="movie-btn-add">Add New Movie</a>
    </div>

    <table class="movie-table">
        <thead>
            <tr>
                <th class="movie-th">ID</th>
                <th class="movie-th">Name</th>
                <th class="movie-th">Edit</th>
                <th class="movie-th">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr class="movie-tr">
                    <td class="movie-td" data-label="ID">{{ $movie->id }}</td>
                    <td class="movie-td" data-label="Name">{{ $movie->name }}</td>
                    <td class="movie-td" data-label="Edit">
                        <a href="{{ route('movies.edit', $movie->id) }}" class="movie-btn-edit">Edit</a>
                    </td>
                    <td class="movie-td" data-label="Delete">
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="post" class="movie-form-delete" onsubmit="return confirm('Are you sure you want to delete this movie?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="movie-btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('templates.footer')
