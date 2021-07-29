@extends('layouts.base')

@section('contenido')
<h1>Editar productos</h1>

    <form action="/articulos/{{$articulos->id}}/update" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Codigo</label>
          <input  id="codigo" name="codigo" type="text" class="form-control" tabindex="1" value="{{$articulo->codigo}}">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input  id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" {{$articulo->descripcion}}>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input  id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3" {{$articulo->cantidad}}>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input  id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="1" {{$articulo->precio}}>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
        
       <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
      </form>




@endsection