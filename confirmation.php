<?php
  ini_set('display_errors', '1');
  ini_set('display_startup_errors', '1');
  error_reporting(E_ALL);

  $fp = fopen( __DIR__ .'/logs.log', 'a');

fwrite($fp, "CONFIRMATION");
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

?>

