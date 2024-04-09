<?php

// Mostrar todos los errores (útil para depuración)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Iniciar sesión
session_start();

// archivo del framework PHPFramex
require('PHPFramex.php');

// Incluir las rutas
require('Routes.php');




