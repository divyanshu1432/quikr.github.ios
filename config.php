<?php
include "stripe-php-master/init.php";

$Publishablekey = "pk_test_51HbcvGKhpnfxVx0dflEYlR6LNBD3dS4qRMV55KyDjpZhPSAnhGL8wysC1mLKCcY1BkVLT05y9ZGsaoihB8Iqskfo00TJemuTpt";
$Secretkey = "sk_test_51HbcvGKhpnfxVx0dksU9JIq2sUkU4CYGefljjQo1wDunH2wUlrFHAiRptqJi80zxDo7EFZBp23hzHgAGcC0t61je00R4ydDV8K";

\stripe\stripe::setApiKey($Secretkey);

?>