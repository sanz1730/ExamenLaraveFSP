<style>
table {
   width: 100%;
}
th, td {
   width: 12%;
   text-align: left;
   border: 1px solid #000;
   text-align: center;
}

</style>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Fecha de Nacimiento</th>
      <th>Domicilio</th>
      <th>Alcaldia</th>
      <th>Telefono de Casa</th>
      <th>Telefono de Celular</th>
      <th>Editar</th>
      <th>Eliminar</th>
      <th>Desactivar</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($Datos as $valor)
      @php
        reset ($Alcaldias);
      @endphp
      
    <tr> 
      <td>{{$valor->nombre.' '.$valor->apellido_paterno.' '.$valor->apellido_materno}}</td>
      <td>{{$valor->fecha_nacimiento}}</td>
      <td>{{$domicilio = 'Calle: '.$valor->calle.' Numero: '.$valor->numero.' Colonia: '.$valor->nombre_asentamiento.' Codigo Postal: '.$valor->codigo_postal}}</td>
      <td>
        @php
            $var = ''
        @endphp

      @foreach ($Alcaldias as $valores)
        @if (isset($valor->id_alcaldia))
            @if($valores->id_alcaldia == $valor->id_alcaldia)
              @php
                  $var = $valores->alcaldia
              @endphp
            @else
              @php
                  $var = ''
              @endphp
            @endif
        @endif
        <label>{{$var}}</label>
      @endforeach
   
    </td>
      <td>{{$valor->numero_casa}}</td>
      <td>{{$valor->numero_celular}}</td>
      <td>
        
        <a href="{{ url('/edit/'.$valor->id_contactos) }}">
        <button type="button">Editar</button>
        </a>
      </td>
      <td>

        
        <a href="{{ url('/eliminar/'.$valor->id_contactos) }}">
          @csrf
          <button type="submit" 
                  onclick="return confirm('¿Quieres Borrar el registro?')">
                  Eliminar
          </button> 
        </a>
      </td>
      <td>
        <a href="{{ url('/delete/'.$valor->id_contactos) }}">
        @csrf
        <button type="button"  onclick="return confirm('¿Quieres Desactivar (Eliminar) el registro?')">Desactivar (Eliminar)</button>
        </a>
      </td>

    </tr>
    @endforeach
    <tr>
      <td>
      <a href="{{ url('/captura') }}">
        <button type="button">Capturar Nuevo Registro</button>
        </a>
      </td>

    </tr>
  </tbody>
</table>
