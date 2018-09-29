<?php
/**
 * Author: dongzhexue
 * Date: 2018/9/27 0027
 * Desc:
 */

include_once './vendor/autoload.php';

$config = array(
    'app_id' => 'wx8069899a270024e4',
    'secret' => '80658d132a6cdd7d37faa0eb3cdca07e',
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

$app->server->push(function ($message) {
    switch ($message['MsgType']) {
        case 'event':
            return '收到事件消息';
            break;
        case 'text':
            return '收到文字消息';
            break;
        case 'image':
            return '收到图片消息';
            break;
        case 'voice':
            return '收到语音消息';
            break;
        case 'video':
            return '收到视频消息';
            break;
        case 'location':
            return '收到坐标消息';
            break;
        case 'link':
            return '收到链接消息';
            break;
        case 'file':
            return '收到文件消息';
        // ... 其它消息
        default:
            return '收到其它消息';
            break;
    }

    // ...
});

$response = $app->server->serve();
$response->send();

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




