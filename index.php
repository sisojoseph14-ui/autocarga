<?php

require 'vendor/autoload.php';

// Debe coincidir exactamente con el namespace del json
use JosephSiso\AutoloadLab\Controllers\UsuarioController;

$controller = new UsuarioController();
$controller->mostrar();