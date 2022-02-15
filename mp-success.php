<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $fp = fopen( __DIR__ .'/logs.log', 'a');

fwrite($fp, "SUCCESS");
fwrite($fp, "request");
$req_dump = print_r($_REQUEST, TRUE);
  fwrite($fp, $req_dump);

  fwrite($fp, "get");

  $req_dump = print_r($_GET, TRUE);
  fwrite($fp, $req_dump);

fwrite($fp, "post");
  $req_dump = print_r($_POST, TRUE);
  fwrite($fp, $req_dump);
  fclose($fp);

/*$actual = file_get_contents($fichero);
// Añade una nueva persona al fichero
$actual .= "John Smith\n";
// Escribe el contenido al fichero
echo var_dump(file_put_contents($fichero, $actual));*/


?>
