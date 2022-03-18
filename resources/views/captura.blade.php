<style>
    *{
      margin:3px;
    }
  </style>
  
<form accion="{{url('/captura')}}" method="post">
  @csrf
  @include('form')


</form>