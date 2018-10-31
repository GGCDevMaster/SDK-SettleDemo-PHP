<?php
require_once __DIR__ . '/config.php';

//日志文件
$file = __DIR__.DIRECTORY_SEPARATOR.'notify_data.log';

$data = $_POST['data'];//json数据
$sign = $_POST['sign'];//签名
$sign1 = md5('data='.$data.APP_SECRET);
if($sign==$sign1){
    //TODO业务逻辑处理
    
    //写入日志
    $link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
    file_put_contents($file, date('Y-m-d H:i:s').'     '.$link.'\n',FILE_APPEND);
    file_put_contents($file, $data,FILE_APPEND);
    
    //
    echo 'ok';//回应服务器
    exit;
}
?>