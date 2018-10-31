<?php

//相关参数请向GGC运营方索要
define('APP_NAME', '****');
define('APP_ID', '****');
define('APP_KEY', '****');
define('APP_SECRET', '****');
define('URL', '****');

define('NOTIFY_URL', '你的回调处理URL');

function sign($params) {
    //计算签名
    ksort($params);
    $arr = [];
    foreach ($params as $key => $value) {
        $arr[] = "{$key}={$value}";
    }
    $str = implode("&", $arr);
    $str .= APP_SECRET;
    return md5($str);
}

function get($url) {
    //初始化
    $ch = curl_init();
//设置选项，包括URL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);

//执行并获取HTML文档内容
    $output = curl_exec($ch);

//释放curl句柄
    curl_close($ch);

//打印获得的数据
    //print_r($output);
    return $output;
}

function post($url, $post_data) {
//    $url = "http://localhost/web_services.php";
//    $post_data = array ("username" => "bob","key" => "12345");
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // post数据
    curl_setopt($ch, CURLOPT_POST, 1);
    // post的变量
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    $output = curl_exec($ch);
    curl_close($ch);

    //打印获得的数据
    //print_r($output);
    return $output;
}
