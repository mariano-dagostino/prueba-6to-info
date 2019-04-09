<?php


$numero = readline("Ingrese un numero: ");

if (!is_numeric($numero)) {
  echo "Error. No ingresaste un numero\n";
  exit();
}

if (!is_int($numero)) {
  echo "No puedo validar paridad de numeros con coma\n";
  exit();
}

if ($numero % 2 == 0) {
  echo "Es par\n";
}
else {
  echo "Es impar\n";
}
