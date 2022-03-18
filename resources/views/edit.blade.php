<style>
    *{
      margin:1px;
    }
  </style>
  
<form accion="{{url('/edit/'.$Contactos->id_contactos)}}" method="post">
  @csrf
  @include('form')


</form>