@extends('layouts.base')

@section('contenido')
<h1>Listado de productos</h1>

<a href="vehiculos/create" class="btn btn-primary">Crear</a>

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
                {{-- <td>{{$vehiculo->estado.nombre}}</td> --}}
                
                <td>
                    {{-- <a href="vehiculos/{{$articulo->id}}/edit" class="btn btn-info" >editar</a> --}}
                    <button class="btn btn-danger">borrar</button>
                </td>
    
            </tr>
        @endforeach
    </tbody>
</table>
@endsection