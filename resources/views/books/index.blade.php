@extends('layouts.app')

@section('content')

<h1>Libros</h1>

{{-- <a href="{{ route('books.create') }}" class="btn btn-primary">Nuevo Libro</a> --}}
<table class="table table-bordered mt-3">

    <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach ($books as $book)

            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->description }}</td>
                <td>
                    {{-- <a href="{{ route('books.edit', $author->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('books.delete', $author->id) }}" style="display:contents" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btnDelete">Eliminar</button>
                    </form> --}}
                </td>
            </tr>

        @endforeach
    </tbody>

</table>

@endsection
