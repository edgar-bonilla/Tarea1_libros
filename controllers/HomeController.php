<?php
require_once 'vendor/autoload.php';

class HomeController extends Controller
{
    public function index()
    {
        // Cargar el contenido del menú de navegación
        $navigation = file_get_contents('views/home/navigation.mustache');
        
        // Configurar el motor de Mustache
        $mustache = new Mustache_Engine;

        // Renderizar la vista home/index.mustache con los datos de navegación
        $renderedContent = $mustache->render(file_get_contents('views/home/index.mustache'), ['navigation' =>  $navigation]);
        
        return $renderedContent;
    }
}
