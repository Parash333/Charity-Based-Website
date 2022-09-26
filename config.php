<?php

require 'vendor/autoload.php';

$publishableKey = "pk_test_51L1Y8PETqnorU9mIGVy5iLydGg12OnK8lSsgwYr8dU6dFOeKBC0wRcBfmclNgAp83nQWmn8O8UpbBQIHEjL06PMG00YOTNUTnl";
$secretKey= "sk_test_51L1Y8PETqnorU9mIybNjAwall0uncMsaCMMIsZJN2t8jKJm3YgMYIu8YgTrEPrXFwzo6V8tbh4Lcu510JPXoBZi100QAsTB1bb";

\Stripe\Stripe::setApiKey($secretKey);
?>
