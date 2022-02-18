<?php
  $fp = fopen( __DIR__ .'/logs.log', 'a');

fwrite($fp, "CONFIRMATION AL WEBHOOK");
/*fwrite($fp, "request");
$req_dump = print_r($_REQUEST, TRUE);
  fwrite($fp, $req_dump);
  fwrite($fp, "get");
  $req_dump = print_r($_GET, TRUE);
  fwrite($fp, $req_dump);
fwrite($fp, "post");
  $req_dump = print_r($_POST, TRUE);
  fwrite($fp, $req_dump);*/

$resultado = array_merge($_REQUEST, $_GET);
$resultado = array_merge($resultado, $_POST);
$req_dump = print_r($resultado, TRUE);
fwrite($fp, $req_dump);
  fclose($fp);
?>

