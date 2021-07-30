@extends('layouts.base')

@section('contenido')
<h1>Crear productos</h1>

    <form action="/vehiculos/store" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">placa</label>
          <input  id="placa" name="placa" type="text" class="form-control" tabindex="1">
          
        </div>
        <div class="mb-3">
            <label for="" class="form-label">telefono</label>
            <input  id="telefono" name="telefono" type="text" class="form-control" tabindex="2">
            
          </div>
          <div class="mb-3">
            <label for="" class="form-label">color</label>
            <input  id="color" name="color" type="text" class="form-control" tabindex="3">
            
          </div>
          <div class="mb-3">
            <label for="tipoServicio">Seleccione el servicio</label>
                            <select class="form-control" id="estado" name="estado">
                                @if (isset($estados))
                                    @foreach ($estados as $estado)
                                    <option>{{$estado->nombre}}</option>
                                    @endforeach  
                                @else
                                <option>no encontre</option>
                                @endif
                            </select>
          </div>
        
       <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
      </form>




@endsection