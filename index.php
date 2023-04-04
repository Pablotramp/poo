<?php
require_once('./models/contador.php');
$contador = new Contador($_REQUEST['salida']??0);

extract(($_REQUEST));

if (isset($sumar)) {
  $contador->add();
}
if (isset($restar)) {
  $contador->quit();
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
  </form>
</body>

</html>