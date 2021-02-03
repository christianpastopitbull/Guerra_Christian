@extends('welcome')
@section('content')

<form action ="{{route('recAct', $bus->id) }}"  method="POST">
@csrf
  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" id="validationTooltip01" name="nombreE" value="{{$bus->nombre}}" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">DIRECCION</label>
    <input type="text" class="form-control" id="validationTooltip02" name="direccionE" value="{{$bus->direccion}}" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">TELEFONO</label>
    <input type="text" class="form-control" id="validationTooltip02" name="telefonoE" value="{{$bus->telefono}}" required>
    <div class="valid-tooltip">
      Looks good!
    </div>
  </div>
  <div class="col-md-3">
  <label for="validationCustom03" class="form-label">Ciudad</label><br>
    <select id="lista" name="ciudadE" required>
    @foreach($editor as $c)
    <option value="{{$c->id}}">{{$c->ciudad}}</option>
    @endforeach
    </select>
</div>
  
  <div class="col-12"><br>
    <button class="btn btn-primary" type="submit">Actualizar</button>
  </div>
  
</form>


@stop