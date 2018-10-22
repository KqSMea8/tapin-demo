<?php
/**
 * Author: dongzhexue
 * Date: 2018/10/22 0022
 * Desc: 网站克隆
 */

include_once './vendor/autoload.php';

ini_set('memory_limit', '4069M');

class HttpCloneDemo
{

    public static $_web_site = "http://www.iguangj.com/";

    public static $_clone_dir = __DIR__.'/clone/';

    public static $_crawl_deepin = 1;

    private $deepin_val = 0;

    /**
     * @var array 图片信息
     */
    private $image_data = [];

    private $url_data = [];

    public function crawl_start()
    {
        $this->init();
//        $this->getHtmlContent(self::$_web_site, 'index.html');
        $urls = $this->getHtmlUrl(self::$_web_site);
        foreach ($urls as $url){
            if (strpos($url, 'http://') === false){
                continue;
            }
            echo 'starting....'.$url."\n";
            $this->getHtmlContent($url);
            echo 'ending...'.$url."\n";
        }
//        $this->getHtmlContent(self::$_web_site);
        echo 'success!';
    }


    public function getHtmlUrl($url)
    {
        $data = $this->getLink($url, [
            'link' => array('a', 'href')
        ]);
        return array_values(array_filter($data->all(), function ($item){
            if (empty($item) || $item == '#'){
                return false;
            }
            return true;
        }));
    }

    public function getHtmlImage($url)
    {
        $data = $this->getLink($url, [
            'link' => array('img', 'src')
        ]);
        return array_values(array_filter($data->all(), function ($item) {
            if (empty($item)) {
                return false;
            }
            return true;
        }));
    }


    public function getMd5Name($name, $ext)
    {
        switch ($ext) {
            case 'html':
                $file_name = './html/' . md5($name) . '.html';
                break;

            case 'image':
                $file_name = './image/' . md5($name) . '.jpg';
                break;

            default:
                $file_name = '';
                break;
        }
        return $file_name;
    }


    public function init()
    {
        //创建相应的目录
        $array_dir = [
            '/', //根目录
            '/image',
            '/html'
        ];
        foreach ($array_dir as $dir){
            $dir = self::$_clone_dir.$dir;
            if (!file_exists($dir)){
                mkdir($dir, 777, true);
            }
        }
    }

    private function getLink($url = '', $rules = [])
    {
        if (empty($url)){
            $url = self::$_web_site;
        }
        $data = \QL\QueryList::get($url)->rules($rules)->query()->getData(function ($item){
            return $item['link'];
        });
        return $data;
    }

    /**
     * 下载当前页面的图片，下当前请求的url
     * @param $url
     */
    public function getHtmlContent($url, $file_index = '')
    {
//        if ($this->deepin_val > self::$_crawl_deepin){
//            return false;
//        }
        $html = \Sunra\PhpSimple\HtmlDomParser::str_get_html(file_get_contents($url));
        foreach ($html->find('a') as $a_element) {
            $a_element->href = $this->getMd5Name($a_element->href, 'html');
        }
        foreach (array_filter($html->find('img')) as $a_element) {
            if (strpos($a_element->src, 'http://') === false) {
                $a_element->src = $url.$a_element->src;
            }
            $origin_element = $a_element->src;
            $a_element->src = $this->getMd5Name($a_element->src, 'image');
            if (!in_array($a_element->src, $this->image_data)){
                $img_content = file_get_contents($origin_element);
                file_put_contents(self::$_clone_dir . $a_element->src, $img_content);
                $this->image_data[] = $a_element->src;
            }
        }
        if (!empty($file_index)){
            $down_file = self::$_clone_dir. $file_index;
            file_put_contents($down_file, $html);
            return true;
        }else{
            $down_file = self::$_clone_dir . $this->getMd5Name($url, 'html');
        }
        file_put_contents($down_file, $html);

//        $url_data = $this->getHtmlUrl($url);
//        foreach ($url_data as $url) {
//            if (!in_array($url, $this->url_data)){
//                $this->getHtmlContent($url);
//                $this->url_data[] = $url;
//            }
//        }
//        $this->deepin_val++;
    }
}

$httpDemoSer = new HttpCloneDemo();
$httpDemoSer->crawl_start();
