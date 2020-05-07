<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Problema</title>
</head>

<body bgcolor="#FFA07A">
	  <?php
  $suma = 0;
  foreach ($_REQUEST as $clave => $valor) {
    echo "Valor: " . $valor;
    echo "<br>";
    $suma = $suma + $valor;
  }
  echo"La suma es: " . $suma;
  ?>

</body>
</html>