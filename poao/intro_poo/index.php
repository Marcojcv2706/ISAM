<?php

require_once "Modelos/Libro.php";
require_once "Modelos/Biblioteca.php";
require_once "Sistema/Libro.php";

use Modelos\Libro;
use Modelos\Biblioteca;
use Sistema\Libro as LibroSistema;

// Instanciacion o creacion del objeto
/*$libro = new Libro("1984", "George Orwell", 123456890);
$libro->mostrarInformacion();
// Usar el setter de titulo
$libro->setTitulo("Rebelion en la granja");
$libro->mostrarInformacion();*/

$libro1 = new Libro("1984", "George Orwell", 123456890);
$libro2 = new Libro("Rebelion en la granja", "George Orwell", 123456891);
$libro3 = new Libro("Rayuela", "Julio Cortazar", 123456892);

$biblioteca = new Biblioteca("Municipal");

$biblioteca->recibirLibro($libro1);
$biblioteca->recibirLibro($libro2);
$biblioteca->recibirLibro($libro3);

$biblioteca->listarLibros();

echo "--------<br>";

$libroSistema = new LibroSistema("Mafalda");
echo $libroSistema->getTitulo();
