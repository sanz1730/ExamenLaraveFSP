@if(count($errors)>0)
       <ul>
              @foreach($errors->all() as $mensaje)
              <li> {{ $mensaje }} </li>
              @endforeach
       </ul>
@endif
  
  
  <label for="nombre">Nombre:</label>
  <input type="text" id="nombre" name="nombre" maxlength="50" 
         value="{{isset($Contactos->nombre)?$Contactos->nombre:''}}"/><br>
         
         
  <label for="apellido_paterno">Apellido Paterno:</label>
  <input type="text" id="apellido_paterno" name="apellido_paterno" maxlength="50" 
         value="{{isset($Contactos->apellido_paterno)?$Contactos->apellido_paterno:''}}"/><br>

  <label for="apellido_materno">Apellido Materno:</label>
  <input type="text" id="apellido_materno" name="apellido_materno" maxlength="50" 
         value="{{isset($Contactos->apellido_materno)?$Contactos->apellido_materno:''}}"/><br>

  <label for="fecha_nacimiento">Fecha de Nacimiento</label>
  <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" maxlength="10" 
         value="{{isset($Contactos->fecha_nacimiento)?$Contactos->fecha_nacimiento:''}}"/><br>

  <label for="">Calle</label>
  <input type="text" id="calle" name="calle" maxlength="50" 
         value="{{isset($Contactos->calle)?$Contactos->calle:''}}"/><br>

  <label for="">Numero</label>
  <input type="text" id="numero" name="numero" class="solo_numeros" maxlength="10" 
         value="{{isset($Contactos->numero)?$Contactos->numero:''}}"/><br>

  <label for="nombre_asentamiento">Nombre Asentamiento (Colonia)</label>
  <input type="text" id="nombre_asentamiento" name="nombre_asentamiento" maxlength="50" 
         value="{{isset($Contactos->nombre_asentamiento)?$Contactos->nombre_asentamiento:''}}"/><br>

  <label for="codigo_postal">Codigo Postal</label>
  <input type="number" id="codigo_postal" name="codigo_postal" class="solo_numeros" maxlength="5" 
         value="{{isset($Contactos->codigo_postal)?$Contactos->codigo_postal:''}}"/><br>

  <label for="id_alcaldia">Alcaldia</label>
  <select id="id_alcaldia" name="id_alcaldia">
    <!-- #- Para crear las opciones y devolver el selected-->
    @php
        $var = ''
    @endphp

  @foreach ($Alcaldias as $valores)
    @if (!empty($Contactos->id_alcaldia))
        @if($valores->id_alcaldia == $Contactos->id_alcaldia)
            @php
                $var = 'selected'
            @endphp
        @else
            @php
                $var = ''
            @endphp
        @endif
    @endif
    <option value="{{$valores->id_alcaldia}}" {{ $var }} >{{$valores->alcaldia}}</option>
  @endforeach
  </select><br>
  <label for="numero_casa">Numero Telefonico de Casa</label>
  <input type="number" id="numero_casa" name="numero_casa" class="solo_numeros" maxlength="10" 
         value="{{isset($Contactos->numero_casa)?$Contactos->numero_casa:''}}"/><br>
  <label for="">Numero de Celular</label>
  <input type="number" id="numero_celular" name="numero_celular" class="solo_numeros" maxlength="10" 
         value="{{isset($Contactos->numero_celular)?$Contactos->numero_celular:''}}"/><br>

  <button type="submit" name="Guardar" value="Guardar" id="Guardar">Guardar</button>
  <a href="{{ url('/') }}">
    <button type="button" name="Cancelar" value="Cancelar" id="Cancelar">Cancelar</button>
  </a>
