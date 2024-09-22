@extends('../layouts.plantilla')

@section('title','Pagina donde se muestran los cursos '.$curso->name)
 



@section('content')
<h1>Curso de {{$curso->name}}</h1>  
<a href="{{route('paginaPrincipal')}}">Volver a Cursos</a>  
<br>
<a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>  
<p><strong>Categoria {{$curso->categoria}}</strong></p>
<p><strong>Descripcion {{$curso->descripcion}}</strong></p>
@endsection


