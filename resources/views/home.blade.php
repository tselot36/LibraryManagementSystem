@extends('layout')

@section('content')
    <div class="jumbotron text-center" style="background-image: url('{{ asset('images/library-bg.jpg') }}'); background-size: cover; background-position: center; color: white;">
        <h1 class="display-4">Welcome to the Library Management System</h1>
        <p class="lead">Manage your books and authors effortlessly</p>
        <a href="{{ route('authors.index') }}" class="btn btn-primary btn-lg m-2"><i class="fas fa-user"></i> Manage Authors</a>
        <a href="{{ route('books.index') }}" class="btn btn-success btn-lg m-2"><i class="fas fa-book"></i> Manage Books</a>
    </div>
@endsection

