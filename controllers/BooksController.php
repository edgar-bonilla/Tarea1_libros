

<?php
require_once 'vendor/autoload.php';


class BooksController
{
    public function index()
    {

        // Cargar el contenido del menú de navegación
        $navigation = file_get_contents('views/home/navigation.mustache');
        $db = new SQLite3('libreria.db');

        // Obtener los datos de libros desde la base de datos
        $result = $db->query('SELECT * FROM books');
        $books = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $books[] = $row;
        }

        // Cerrar la conexión a la base de datos
        $db->close();

        // Renderizar la vista publishers/index.mustache con el menú de navegación
        $mustache = new Mustache_Engine;
        echo $mustache->render(file_get_contents('views/books/index.mustache'), ['navigation' =>  $navigation, 'books' =>  $books]);
    }
}
?>
