<?php
namespace Modelos;

Class estudiante {
    private string $nombre;
    private string $legajo;

    public function __construct(string $nombre, string $legajo){
        $this->nombre = $nombre;
        $this->legajo = $legajo;
    }
    public function getNombre(): string {
        return $this->nombre;
    }
    public function setNombre(string $nombre): void{
        $this->nombre = $nombre;
    }
    public function getLegajo(): int {
        return $this->legajo;
    }
    public function setLegajo(int $legajo): void{
        $this->legajo = $legajo;
    }
    public function mostrarinformacion(): void {
        echo "El estudiante se llama {$this->nombre}";
    }
}