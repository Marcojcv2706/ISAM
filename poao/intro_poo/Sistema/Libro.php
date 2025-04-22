<?php

namespace Sistema;

class Libro {
    private string $titulo;

    public function __construct(string $titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }
}
