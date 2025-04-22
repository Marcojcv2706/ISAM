<?php

namespace Modelos;

class Libro {
    private string $titulo;
    private string $autor;
    private int $isbn;

    public function __construct(string $titulo, string $autor, int $isbn) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function getAutor(): string {
        return $this->autor;
    }

    public function setAutor(string $autor): void {
        $this->autor = $autor;
    }

    public function getIsbn(): int {
        return $this->isbn;
    }

    public function setIsbn(int $isbn): void {
        $this->isbn = $isbn;
    }

    public function mostrarInformacion(): void {
        echo "El libro se llama {$this->titulo}";
    }
}
