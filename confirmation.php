<?php

header("HTTP/1.1 200 OK");

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/lib/Doctrine/Common/Lexer/AbstractLexer.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/NamedArgumentConstructorAnnotation.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/TokenParser.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/PhpParser.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/DocParser.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/DocLexer.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/Reader.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/AnnotationReader.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/Annotation.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/Annotation/Target.php';
require __DIR__ . '/lib/Doctrine/Common/Annotations/ImplicitlyIgnoredAnnotationNames.php';
require __DIR__ . '/MercadoPago/Version.php';
require __DIR__ . '/MercadoPago/Entity.php';
require __DIR__ . '/MercadoPago/SDK.php';
require __DIR__ . '/MercadoPago/RestClient.php';
require __DIR__ . '/MercadoPago/Http/HttpRequest.php';
require __DIR__ . '/MercadoPago/Http/CurlRequest.php';
require __DIR__ . '/MercadoPago/Config/AbstractConfig.php';
require __DIR__ . '/MercadoPago/Config.php';
require __DIR__ . '/MercadoPago/Manager.php';
require __DIR__ . '/MercadoPago/MetaDataReader.php';
require __DIR__ . '/MercadoPago/Entities/Preference.php';
require __DIR__ . '/MercadoPago/Entities/Shared/Item.php';
require __DIR__ . '/MercadoPago/Entities/Shared/Payer.php';
require __DIR__ . '/MercadoPago/Entities/Shared/PaymentMethod.php';

require __DIR__ . '/MercadoPago/Entities/Shared/Payment.php';
require __DIR__ . '/MercadoPago/Entities/Invoice.php';

$url = "https://mp-certification.herokuapp.com/";

// SDK de Mercado Pago
//use MercadoPago\SDK as MercadoPago\SDK;

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


  $fp = fopen( __DIR__ .'/logs.log', 'a');

fwrite($fp, "CONFIRMATION AL WEBHOOK");

$resultado = array_merge($_REQUEST, $_GET);
$resultado = array_merge($resultado, $_POST);
//$req_dump = print_r($resultado, TRUE);
$req_dump = json_encode($resultado);
fwrite($fp, $req_dump);
fwrite($fp, '------------------------>Pido el merchant order /n');
//$info = MercadoPago\SDK::get('/merchant_orders/'.$resultado['id']);
$inputJSON = file_get_contents('php://input');
fwrite($fp, $inputJSON);
fwrite($fp, "-----------------zzzz");
/*$input = json_decode($inputJSON, TRUE); //convert JSON into array
fwrite($fp, $input);*/

/*switch($resultado["type"]) {
      case "payment":
          $plan = MercadoPago\Payment::find_by_id($resultado["data_id"]);
      fwrite($fp, "Hola->");
    fwrite($fp, $plan);
          break;
      case "plan":
          $plan = MercadoPago\Plan::find_by_id($resultado["data_id"]);
          break;
      case "subscription":
          $plan = MercadoPago\Subscription::find_by_id($resultado["data_id"]);
          break;
      case "invoice":
          $plan = MercadoPago\Invoice::find_by_id($resultado["data_id"]);
          break;
      case "point_integration_wh":
          // $_POST contiene la informaciòn relacionada a la notificaciòn.
          break;
  }*/

//fwrite($fp, json_encode($info));
fwrite($fp, '----FIN----');

  fclose($fp);


?>

