<?php
require_once __DIR__ . '/config.php';

$txid = trim($_POST['txid']);

$url = URL . '/mch/txdetail?app_id=' . APP_ID . '&app_key=' . APP_KEY;

$post_data = [
    'txid' => $txid,
];
//签名
$post_data['sign'] = sign($post_data);

$str = post($url, $post_data);
//$res = json_decode($str);
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>返回结果</title>
    </head>
    <body>
        <h1>返回结果</h1>
        <div>
            <div>
                <textarea rows="30" cols="100"><?php echo $str; ?></textarea>
            </div>
        </div>
        <div>
            <p>
                <a href="index.php">回到首页</a>
            </p>
        </div>
    </body>

</html>


