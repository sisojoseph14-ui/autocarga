<?php

namespace JosephSiso\AutoloadLab\Controllers;

// Importamos el modelo usando el mismo prefijo
use JosephSiso\AutoloadLab\Models\Usuario;

class UsuarioController
{
    public function mostrar()
    {
        $usuario = new Usuario();
        echo $usuario->saludar();
    }
}