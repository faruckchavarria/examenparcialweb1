@extends('layouts.plantillabase')


@section('Contenido')
<h1> Crear registros</h1>

<form action="/articulos" method="post">
@csrf()
<div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nombres</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellidos</label>
        <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" tabindex="4">
    </div><div class="mb-3">
        <label for="" class="form-label">Titulo</label>
        <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" tabindex="4">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" tabindex="4">
    </div>
    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection