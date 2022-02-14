<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
echo "lol";
  $req_dump = print_r($_REQUEST, TRUE);
  $fp = fopen( __DIR__ .'/logs/success.log', 'a');
  fwrite($fp, $req_dump);
  fclose($fp);
echo "hola";
?>
