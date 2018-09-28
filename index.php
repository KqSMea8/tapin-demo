<?php
/**
 * Author: dongzhexue
 * Date: 2018/9/27 0027
 * Desc:
 */

$config = array(
    'app_id' => 'wx8069899a270024e4',
    'secret' => '80658d132a6cdd7d37faa0eb3cdca07e',
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


