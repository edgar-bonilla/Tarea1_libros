<?php



// Importar los controladores
require_once 'controllers/HomeController.php';
require_once 'controllers/BooksController.php';
require_once 'controllers/AuthorsController.php';
require_once 'controllers/PublishersController.php';

// Definir las rutas
Route::get('/', 'HomeController@index');
Route::get('/books', 'BooksController@index');
Route::get('/authors', 'AuthorsController@index');
Route::get('/publishers', 'PublishersController@index');

// Despachar las rutas
Route::dispatch();
?>





