@extends('layout')

@section('content')
    <h1 class="mb-4">Books</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Create New Book</a>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Publication Year</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
		    <td>{{ $book->publication_year }}</td>
                    <td>{{ $book->genre }}</td>
                    <td class="text-center">
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

