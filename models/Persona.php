<?php

declare(strict_types=1);
class Persona
{
  
  public string $nombre = 'Desconocido';
  public string $pais = '';
  private int $edad = 0;

  function __construct(?string $name, ?int $edad) {
    $this->nombre = $name??'unknow';
    $this->edad = $edad??0;
  }

  public function getEdad () : int {
    return $this->edad;
  }

  function __toString() {
    return join(',', [$this->nombre, $this->pais, $this->edad]);
  }

}