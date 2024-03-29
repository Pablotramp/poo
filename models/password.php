<?php

declare(strict_types=1);
class Password
{

  private string $contraseña = '';
  private int $longitud = 8;

  function __construct(?int $longitud)
  {
    $this->longitud = $longitud ?? 8;
    $this->contraseña = $contraseña ?? '';
  }
  function getcontraseña()
  {
    return $this->contraseña;
  }

  public function esFuerte()
  {
  }

  function generarPassword()
  {
    // TRUE O FALSE EN LA OPCIÓN QUE QUIERAS AÑADIR

    $opc_letras = TRUE; //  FALSE para quitar las letras
    $opc_numeros = TRUE; // FALSE para quitar los números
    $opc_letrasMayus = TRUE; // FALSE para quitar las letras mayúsculas
    $opc_especiales = TRUE; // FALSE para quitar los caracteres especiales
    $password = "";

    $letras = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "1234567890";
    $letrasMayus = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $especiales = "|@#~$%()=^*+[]{}-_";
    $listado = "";

    if ($opc_letras == TRUE) {
      $listado .= $letras;
    }
    if ($opc_numeros == TRUE) {
      $listado .= $numeros;
    }
    if ($opc_letrasMayus == TRUE) {
      $listado .= $letrasMayus;
    }
    if ($opc_especiales == TRUE) {
      $listado .= $especiales;
    }

    str_shuffle($listado);
    for ($i = 1; $i <= $this->longitud; $i++) {
      $password[$i] = $listado[rand(0, strlen($listado))];
      str_shuffle($listado);
      $this->contraseña = $password;

    }
  }
}
