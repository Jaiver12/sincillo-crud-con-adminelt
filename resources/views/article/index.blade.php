@extends('adminlte::page')

@section('title', 'Articulo')

@section('content_header')
    <h1>Articulos</h1>
@stop

@section('content')

    <a href="article/create" class="btn btn-primary mb-4">Crear articulo</a>

    <table id="articles" class="table table-dark table-striped shadow-lg mt-4" style="width:100%">

        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>

            @foreach ($articles as $article)
                <tr>
                    <td scope="row">{{ $article->id }}</td>
                    <td>{{ $article->code }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->stock }}</td>
                    <td>{{ $article->price }}</td>
                    <td>

                        <form action="{{ route('article.destroy', $article->id) }}" method="POST">

                            <a href="/article/{{$article->id}}/edit" class="btn btn-info">Editar</a>

                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger">Eliminar</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>

    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css"/>  
@stop

@section('js')
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articles').DataTable();
        } );
    </script>
@stop