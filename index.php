<?php

require_once "controladores/plantilla-controlador.php";
require_once "controladores/administrador.controlador.php";

require_once "modelos/administrador.modelos.php";

require_once "modelos/rutas.php";

$plantilla= new ControladorPlantilla();
$plantilla->crtPlantilla();