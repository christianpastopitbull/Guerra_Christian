@extends('welcome')
@section('content')



<div class="alert alert-danger" role="alert">
 <h1 class="text-center"> LISTADO LIBROS </h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">ISBN</th>
            <th scope="col">NOMBRE </th>
            <th scope="col">STOCK</th>
            <th scope="col">ESTADO</th>
            <th scope="col">EDITORIAL</th>
            <th scope="col">PRECIO</th>
            <th scope="col">DESCUENTO </th>
        </tr>
    </thead>
    <tbody>
    @foreach($libro as $l)
      
            <tr>
            <td> {{ $l->id }} </td>
            <td> {{ $l->isbn }} </td>
            <td> {{ $l->titulo }}</td>
            <td> {{ $l->precio }}</td>
            <td> {{ $l->stock }}</td>
            <td> {{ $l->nombre }}</td>
            </tr>
        
    @endforeach
    </tbody>
</table 



@stop