@extends('layouts.base')

@section('contenido')
<h1>Editar productos</h1>

    <form action="{{ route('vehiculos.update',$vehiculo->id) }}" method="POST">
        {{-- @method('PUT') --}}
        @csrf
          @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">placa</label>
          <input  id="placa" name="placa" type="text" class="form-control" tabindex="1" value="{{$vehiculo->placa}}">
         
        </div>
        <div class="mb-3">
            <label for="" class="form-label">telefono</label>
            <input  id="telefono" name="telefono" type="text" class="form-control" tabindex="2" value="{{$vehiculo->telefono}}">
           
          </div>
          <div class="mb-3">
            <label for="" class="form-label">color</label>
            <input  id="color" name="color" type="text" class="form-control" tabindex="3" value="{{$vehiculo->color}}">
            
          </div>
          {{-- <div class="mb-3">
            <label for="" class="form-label">estado</label>
            <input  id="estado" name="estado" type="number" step="any" value="0.00" class="form-control" tabindex="1" {{$articulo->estado}}>
           
          </div> --}}
          <div class="mb-3">
            <label for="tipoServicio">Seleccione el servicio</label>
                            <select class="form-control" id="tipoServicio" name="servicio">
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