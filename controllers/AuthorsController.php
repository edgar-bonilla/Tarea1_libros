

<?php
require_once 'vendor/autoload.php';



class AuthorsController
{
    public function index()
    {
        // Cargar el contenido del menú de navegación
        $navigation = file_get_contents('views/home/navigation.mustache');
        $db = new SQLite3('libreria.db');

        // Obtener los datos de autores desde la base de datos
        $result = $db->query('SELECT * FROM authors');
        $authors = [];
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $authors[] = $row;
        }

        // Cerrar la conexión a la base de datos
        $db->close();

        $mustache = new Mustache_Engine;
        echo $mustache->render(file_get_contents('views/authors/index.mustache'), ['navigation' =>  $navigation, 'authors' => $authors]);
    }
}
?>
