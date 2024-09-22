@extends('../layouts.plantilla')

@section('title','Pagina para crear cursos')
 



@section('content')
<form action="{{route('cursos.store')}}" method="POST">
    @csrf <!--clausula laravel que crea un token oculto, necesaria para el envio de informacion en formularios-->
<label>
    Name: <br> 
         <input type="text" name="name" value="{{old('name')}}"> <!--old mantiene el valor al refrescar cuando manda un error la pagina-->   
</label> 
@error('name')
    <small>*{{$message}}</small>
@enderror
<br>   
<label>
    Descripcion:<br>
    <textarea name="descripcion"  rows="5">{{old('descripcion')}}</textarea>
</label>
@error('descripcion')
    <small>*{{$message}}</small>
@enderror
<br>
<label>
    Categoria: <br>
    <input type="text" name="categoria" value={{old('categoria')}}>
</label>
@error('categoria')
    <small>*{{$message}}</small>
@enderror
<br>

<button type="submit">Enviar Formulario</button>

</form>   
<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```


  
@endsection


