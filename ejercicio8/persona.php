<?php
class Persona
{
    private $nombre;
    private $apellidos;
    private $edad;

    public function __construct($nombre, $apellidos, $edad){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setEdad($edad){
        $this->edad = $edad;
        return $this;
    }

    public function mayorEdad(){
        if ($this->edad >= 18) {
            return true;
        } else {
            return false;
        }
    }

    public function nombreCompleto(){
        return $this->nombre . " " . $this->apellidos;
    }
}
?>

