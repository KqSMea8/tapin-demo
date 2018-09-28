<?php
/**
 * Author: dongzhexue
 * Date: 2018/9/27 0027
 * Desc:
 */

include_once './vendor/autoload.php';

$config = array(
    'app_id' => 'wx1bb68de642819e99',
    'secret' => '600d4861dad18b09ddfecf0ad815326f',
    'token'  => 'tapin',

    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => __DIR__ . '/wechat.log',
    ],
);


$app =  \EasyWeChat\Factory::officialAccount($config);
$response =  $app->server->serve();
$response->send();


