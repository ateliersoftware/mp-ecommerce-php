<?php
  $req_dump = print_r($_REQUEST, TRUE);
  $fp = fopen('success.log', 'a');
  fwrite($fp, $req_dump);
  fclose($fp);
?>
