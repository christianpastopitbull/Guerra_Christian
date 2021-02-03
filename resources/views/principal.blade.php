@extends('welcome')
@section('content')
       <h5 text-center> hola parcial <h5>
       <div class="card-group">
  <div class="card">
    <img src='{{url("/img/1.jpg")}}' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Nosotros</h5>
      <p class="card-text">La Libreria PASTO es en la actualidad una de las librerías más antiguas y tradicionales de Pasto.</p>
    </div>
    
  </div>
  <div class="card">
    <img src='{{url("/img/2.jpg")}}' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Historia</h5>
      <p class="card-text">Nuestros origenes empienzan en el año de 1992 cuando el señor Jesus Guerra piensa en la innovacion del las librerias en la ciudad de Pasto. Desde entonces nos destacamos por ser una de las mejores librerias del sur oriente colombiano </p>
    </div>
   
  </div>
  <div class="card">
    <img src='{{url("/img/3.png")}}' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Servicios</h5>
      <p class="card-text">Alquiler y venta de los mejores libros de todas las categorias </p>
    </div>
   
  </div>
</div>
@stop