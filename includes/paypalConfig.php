<?php
    require_once("PayPal-PHP-SDK/autoload.php");

    $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            'ATJG1cDxX8RLV_xlO-kYH6--_yGGQaQQwzubRqPoJ4X4rCv2JkLLJozJWDdVvy4YamPlKV2L1c_xtbYb',     // ClientID
            'ECfI4YcUHd1Wl1M1ecymKxVtC8bnjcpgM9SABmYkH8v-fn8nre8CqwRGSPOzHquXkB1XypkDwaeFnMCD'      // ClientSecret
        )
    );
?>

