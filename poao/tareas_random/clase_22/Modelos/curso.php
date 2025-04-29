<?php

namespace Modelos;

require_once "estudiante.php";

class curso {
    private string $nombre;
    private array $estudiantes = [];

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

    public function recibirEstudiantes(estudiante $estudiantes): void {
        $this->estudiantes[] = $estudiantes;
    }

    public function listarEstudiantes(): void {
        echo "estudiantes en el curso" . $this->getNombre() . "<br>";
        foreach($this->estudiantes as $estudiantes) {
            echo "- " . $estudiantes->getTitulo() . "<br>";
        }
    }
}