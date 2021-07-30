@extends('layouts.base')

@section('contenido')
<h1>Listado de productos</h1>

<a href="{{ route('vehiculos.create') }}" class="btn btn-primary">Crear</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">PLACA</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">COLOR</th>
            <th scope="col">ESTADO</th>
           >
            <th scope="col">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{$vehiculo->placa}}</td>
                <td>{{$vehiculo->telefono}}</td>
                <td>{{$vehiculo->color}}</td>
                <td>{{$vehiculo->estado->nombre}}</td>
                
                <td>
                    <a href="{{ route('vehiculos.edit',$vehiculo->id) }}" class="btn btn-info" >editar</a>
                    <form action="{{ route('vehiculos.destroy',$vehiculo->id) }}" method="POST">
   
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
    
            </tr>
        @endforeach
    </tbody>
</table>
<a href="/vehiculos/descarga" class="btn btn-primary">descargar listado</a>
@endsection