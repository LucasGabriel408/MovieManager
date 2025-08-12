@include('templates.base')
@include('templates.navbar')

<div class="container mt-4">
    <h1>Movie List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->id }}</td>
                    <td>{{ $movie->name }}</td>
                    <td><a href="{{ route('movies.edit', $movie->id) }}">Edit</a></td>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('movies.create') }}" class="btn btn-primary">Add New Movie</a>
</div>