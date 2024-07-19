@extends('layout')

@section('content')
    <h1 class="mb-4">Edit Book</h1>
    <form method="POST" action="{{ route('books.update', $book->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author_id">Author:</label>
            <select class="form-control" id="author_id" name="author_id" required>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" @if($author->id == $book->author_id) selected @endif>{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="publication_year">Publication Year:</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" value="{{ $book->publication_year }}" required>
	</div>
        <div class="form-group">
            <label for="category">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $book->genre }}" required>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
    </form>
@endsection

