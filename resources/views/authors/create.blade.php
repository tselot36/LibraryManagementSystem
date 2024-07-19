@extends('layout')

@section('content')
    <h1 class="mb-4">Create Author</h1>
    <form method="POST" action="{{ route('authors.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Create</button>
    </form>
@endsection

