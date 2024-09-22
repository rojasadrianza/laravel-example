@extends('../layouts.plantilla')

@section('title','Bienvenido a la pagina principal de cursos')
 
@section('content')
   <a href="{{route('creacionDeCursos')}}">Crear Cursos</a>
   <ul>
       @foreach ($cursos as $curso)
           <li>
            <a href="{{route('mostrarCursos',$curso->id)}}">{{$curso->name}}</a>
            </li>
       @endforeach      
   </ul>
   {{$cursos->links()}} <!--para usar links debe estar implementado el metodo paginate() en el controlador-->
@endsection



