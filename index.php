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
    'token'  => 'dxxxue',

    // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
    'response_type' => 'array',

    'log' => [
        'level' => 'debug',
        'file' => __DIR__ . '/wechat.log',
    ],
);


$app =  \EasyWeChat\Factory::officialAccount($config);

$type = $_GET['type'];
switch ($type){
    case 'get_token':
        $token = $app->access_token->getToken();
        dump($token);
        break;

    case 'create_menu':
        $res = $app->menu->create(getButtons());
        dump($res);
        break;

    case 'get_menu':
        $res = $app->menu->current();
        dump($res);
        break;
}

function getButtons(){
    return [
        [
            "type" => "click",
            "name" => "今日歌曲",
            "key" => "V1001_TODAY_MUSIC"
        ],
        [
            "name" => "菜单",
            "sub_button" => [
                [
                    "type" => "view",
                    "name" => "搜索",
                    "url" => "http://www.soso.com/"
                ],
                [
                    "type" => "view",
                    "name" => "视频",
                    "url" => "http://v.qq.com/"
                ],
                [
                    "type" => "click",
                    "name" => "赞一下我们",
                    "key" => "V1001_GOOD"
                ],
            ],
        ],
    ];
}



function dump($data){
    echo '<pre>';
    print_r($data);
    exit;
}




