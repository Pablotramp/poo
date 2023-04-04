<?php
require_once('./models/contador.php');
require_once('./models/password.php');

$contador = new Contador(
  $_REQUEST['salida']?? $_COOKIE['numero']??0);

extract(($_REQUEST));

if (isset($sumar)) {
  $contador->add();
  setcookie('numero', $contador->getCuenta());

}
if (isset($restar)) {
  $contador->quit();
  setcookie('numero', $contador->getCuenta());
}

$password = new Password(8);

if (isset($pswrd)) {
  $password->generarPassword();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <button name="sumar">+</button>
  <button name="restar">-</button>

  <input type="hidden" name="salida" value="<?=$contador->getCuenta();?>">
  <?=$contador->getCuenta();?>

  <br>
  <button name="pswrd">get pasword</button>
  <?=$password->getcontraseña();?>
  </form>


</body>

</html>