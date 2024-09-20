@extends('layouts.app')

@section('template')

<div class="container mt-5">
    <h2 class="mb-4">Livros</h2>
    <ul class="list-group">
        @foreach($books as $book)
            <li class="list-group-item">
                <a href="{{ route('books.show', $book->id) }}">
                    {{ $book->title }}    
                </a>
            </li>
        @endforeach
    </ul>
</div>

@endsection