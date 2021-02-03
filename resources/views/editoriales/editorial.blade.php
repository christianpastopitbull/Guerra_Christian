@extends('welcome')
@section('content')



<div class="alert alert-danger" role="alert">
 <h1 class="text-center"> LISTADO EDITORIALES </h1>
</div><br><br>
<a href="{{route('registroNueva')}}" class="btn btn-danger ">REGISTRAR NUEVA EDITORIAL</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Numero</th>
            <th scope="col">Nombre</th>
            <th scope="col">Direccion </th>
            <th scope="col">Ciudad</th>
            <th scope="col">Telefono</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($edito as $l)
      
            <tr>
            <td> {{ $l->id }} </td>
            <td> {{ $l->nombre }} </td>
            <td> {{ $l->direccion }}</td>
            <td> {{ $l->ciudad }}</td>
            <td> {{ $l->telefono }}</td>
            
            </tr>
        
    @endforeach
    </tbody>
</table 



@stop