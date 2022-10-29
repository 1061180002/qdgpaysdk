<?php

use HuYingKeJi\Qdgpaysdk\Apis\Pay\JsApiRequest;
use HuYingKeJi\Qdgpaysdk\WeChatPaySdkClient;

require_once __DIR__ . "/../vendor/autoload.php";

$jsApiRequest = new JsApiRequest();
$jsApiRequest->setTotal(1);
$jsApiRequest->setOpenid("--------");
$jsApiRequest->setTimeExpire((time() + 900)."");
$jsApiRequest->setNotify("-----------------");
$jsApiRequest->setDescription("测试支付");
$jsApiRequest->setOrderTradeNo(time()."TEST");
$jsApiRequest->setRedirectUrl("https://www.baidu.com");
$weChatPaySdkClient = new WeChatPaySdkClient("----------", "-------------");
$resp = $weChatPaySdkClient->execute($jsApiRequest);
echo json_decode($resp,true)["data"];
