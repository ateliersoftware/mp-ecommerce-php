<?php

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

//$info = MercadoPago\SDK::post('/merchant_orders/'.$resultado['id']);
$info = MercadoPago\SDK::post('/merchant_orders/4180348052');
echo var_dump($info);
$req_dump = print_r($info, true);
//fwrite($fp, '----');
fwrite($fp, $req_dump);
fwrite($fp, '----');
//fwrite($fp, json_encode($info));
fwrite($fp, '----FIN----');

  fclose($fp);


?>

