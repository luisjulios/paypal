<?php 
require 'paypal/autoload.php';
define('URL_SITIO', 'http://localhost/paypal');
$apiContext = new \PayPal\Rest\ApiContext(
  new \PayPal\Auth\OAuthTokenCredential(
    //ClienteID
    'AcsS3eoUuYdoMIjgNI_HfF6ct4maV2OSquNsJSSO_z_tXZ9lbJ2Aypu2P5BJCQb5oUqgljbO7ffUySbw',
    //Secret
    'EJJC4U8QcE7VlcXeePMAJpX6L6oxCudLyIlOFRNNlvrMWEFnbcWZO2Me23zT18Ydl0ygv91JosMhAt7d'
    )
  );
?>