@extends('layout')

@section('content')
    <h1 class="mb-4">{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author->name }}</p>
    <p><strong>Publication Year:</strong> {{ $book->publication_year }}</p>
    <p><strong>Genre:</strong> {{ $book->genre }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Books</a>
@endsection

