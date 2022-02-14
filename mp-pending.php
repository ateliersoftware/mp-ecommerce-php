<?php
  $req_dump = print_r($_REQUEST, TRUE);
  $fp = fopen( __DIR__ .'/logs/pending.log', 'a');
  fwrite($fp, $req_dump);
  fclose($fp);
?>
