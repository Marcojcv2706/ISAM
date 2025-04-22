<?php

namespace Modelos;

require_once "Libro.php";

class Biblioteca {
    private string $nombre;
    private array $libros = [];

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function recibirLibro(Libro $libro): void {
        $this->libros[] = $libro;
    }

    public function listarLibros(): void {
        echo "Libros en la biblioteca " . $this->getNombre() . "<br>";
        foreach($this->libros as $libro) {
            echo "- " . $libro->getTitulo() . "<br>";
        }
    }
}