@extends('adminlte::page')

@section('title', 'Articulo')

@section('content_header')
    <h1>Editar Articulo</h1>
@stop

@section('content')

    <form action="/article/{{ $article->id }}" method="post">
        @method('put')
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" name="code" id="code" class="form-control" value="{{ $article->code }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" name="description" id="description" class="form-control" value="{{ $article->description }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="stock" id="stock" class="form-control" value="{{ $article->stock }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" value="{{ $article->price }}" name="price" id="price" class="form-control">
        </div>

        <a href="/article" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success">Guardar</button>

    </form>
@endsection