<?php
class Contador
{
  private int $cuenta = 0;

  function __construct(?int $cuentaActual)
  {
    $this->cuenta = $cuentaActual ?? 0;
  }
  function getCuenta(): int
  {
    return $this->cuenta;
  }
  function add(): void
  {
    $this->cuenta++;
  }
  function quit(): void
  {
    $this->cuenta--;
  }
}
