<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);
echo "lol";
  $fichero = __DIR__ .'/logs/success.log';

  $req_dump = print_r($_REQUEST, TRUE);
  $fp = fopen( __DIR__ .'/logs/success.log', 'a');
  fwrite($fp, $req_dump);
  fclose($fp);

  $req_dump = print_r($_GET, TRUE);
  $fp = fopen( __DIR__ .'/logs/success.log', 'a');
  echo var_dump(fwrite($fp, $req_dump));
  fclose($fp);

$actual = file_get_contents($fichero);
// Añade una nueva persona al fichero
$actual .= "John Smith\n";
// Escribe el contenido al fichero
echo var_dump(file_put_contents($fichero, $actual));

echo "hola";
?>
