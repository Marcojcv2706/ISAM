<?php
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
    public function getLegajo(): string {
        return $this->legajo;
    }
    public function setLegajo(string $legajo): void{
        $this->legajo = $legajo;
    }
    public function mostrarinformacion(): void {
        echo "El estudiante se llama {$this->nombre}";
    }
}
// Instanciacion o creacion del objeto
$libro = new estudiante("el super libro libroso" , "el insano" , 12343124);
$libro->mostrarinformacion();