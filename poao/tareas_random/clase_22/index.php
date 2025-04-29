<?php

require_once "Modelos/estudiante.php";
require_once "Modelos/curso.php";
require_once "Sistema/estudiante.php";

use Modelos\curso;
use Modelos\estudiante;
use Sistema\estudiante as LibroSistema;

$estudiante1 = new estudiante("Marco Castro", 1122334455);
$estudiante2 = new estudiante("Francisco Usandivares", 123456789);
$estudiante3 = new estudiante("Nicolas Guajardo", 987654321);

$biblioteca = new curso("2° año Superior");

$biblioteca->recibirEstudiantes($estudiante1);
$biblioteca->recibirEstudiantes($estudiante2);
$biblioteca->recibirEstudiantes($estudiante3);

$biblioteca->listarEstudiantes();

echo "--------<br>";