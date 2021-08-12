@extends('adminlte::page')

@section('title', 'Articulo')

@section('content_header')
    <h1>Crear Articulos</h1>
@stop

@section('content')

    <form action="/article" method="post">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Código</label>
            <input type="text" name="code" id="code" class="form-control" tabindex="1">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripción</label>
            <input type="text" name="description" id="description" class="form-control" tabindex="2">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" name="stock" id="stock" class="form-control" tabindex="3">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" step="any" value="0.00" name="price" id="price" class="form-control" tabindex="4">
        </div>

        <a href="/article" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-success"tabindex="6">Guardar</button>

    </form>
@endsection