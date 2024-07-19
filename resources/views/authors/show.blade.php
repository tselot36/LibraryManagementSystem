@extends('layout')

@section('content')
    <h1 class="mb-4">{{ $author->name }}</h1>
    <p><strong>Email:</strong> {{ $author->email }}</p>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Back to Authors</a>
@endsection

