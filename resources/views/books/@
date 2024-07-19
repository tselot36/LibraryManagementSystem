@extends('layout')

@section('content')
    <h1 class="mb-4">Create Book</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select class="form-control" id="author_id" name="author_id" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="publication_year">Publication Year:</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" required>
	</div>
        <div class="form-group">
            <label for="title">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
	</div>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Create</button>
    </form>
@endsection

