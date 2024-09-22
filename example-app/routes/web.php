<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;


//Usando Controladores
/*
comando para crear un controlador:
C:\xampp\htdocs\example-app> php artisan make:controller HomeController (en este cado Home Controller es el nombre que le dimos)
**/


Route::get('/', HomeController::class);

//Usando los controladores agrupados con group
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos','index')->name('paginaPrincipal');
    Route::get('cursos/create', 'create')->name('creacionDeCursos');
    Route::post('cursos', 'store')->name('cursos.store');
    Route::get('cursos/{id}','show')->name('mostrarCursos');
    //Route::get('cursos/{id}/edit','edit')->name('cursos.edit'); //forma 1 de recuperar registro
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit'); //forma 2 de recuperar registro
    Route::put('cursos/{curso}', 'update')->name('cursos.update');
});



/*
Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);*/












/*

Route::get('/', function () {
    return view('welcome');
    //return 'Bienvenido';
});

Route::get('/cursos', function () {
    //return view('welcome');
    return 'Bienvenido a los cursos';
});

//usando el plugin snippets buscamos en la lista que aparece Route::get
Route::get('curso/create', function () {
    return "En esta pagina podras crear un curso";    
});

//enviando variables
Route::get('/curso/{curso}', function ($curso) {    
    return "Bienvenido a los curso: $curso";
});

//unificando rutas. se usa el ? para indicar que la variable es opcional / se debe inicializar la variable opcional
Route::get('curso/{curso}/{categoria?}', function ($curso, $categoria = null) {

    if ($categoria) {
        return "Bienvenido a los curso: $curso de la categoria: $categoria"; 
    }else{
        return "Bienvenido a los curso: $curso";
    }
    
});

*/