@extends('../layouts.plantilla')

@section('title','Pagina para editar cursos')
 



@section('content')
<form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf <!--clausula laravel que crea un token oculto, necesaria para el envio de informacion en formularios-->
    @method('put') <!--esto se pasa solo con update y delete ya que de forma nativa html solo reconoce get y post-->
    
<label>
    Name: <br> 
         <input type="text" name="name" value="{{old('name',$curso->name)}}">  <!--se coloca old y se le agrega la instancia $curso para que mantenga el ultimo valor ingresado --> 
</label>
@error('name')
    <small>*{{$message}}</small>
@enderror
<br>   
<label>
    Descripcion:<br>
    <textarea name="descripcion"  rows="5" >{{old('descripcion',$curso->descripcion)}}</textarea>
</label>
@error('descripcion')
    <small>*{{$message}}</small>
@enderror
<br>
<label>
    Categoria: <br>
    <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}">
</label>
@error('categoria')
    <small>*{{$message}}</small>
@enderror
<br>

<button type="submit">Actualizar Formulario</button>

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


