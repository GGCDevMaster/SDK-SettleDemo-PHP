<?php
require_once __DIR__ . '/config.php';

$goods = trim($_POST['goods']);
$method = trim($_POST['method']);
$user_data = trim($_POST['user_data']);
$to_address = trim($_POST['to_address']);
$amount = trim($_POST['amount']);
$notify_url = NOTIFY_URL;

$url = URL . '/mch/send?app_id=' . APP_ID . '&app_key=' . APP_KEY;

//参数
$post_data = [
    'goods' => $goods,
    'method' => $method,
    'user_data' => $user_data,
    'to_address' => $to_address,
    'amount' => $amount,
    'notify_url' => $notify_url,
];
//签名
$post_data['sign'] = sign($post_data);

$str = post($url, $post_data);
$res = json_decode($str);
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>返回结果</title>
    </head>
    <body>
        <h1>返回结果</h1>
        <?php if (!empty($res->code)) { ?>
            <div>
                <div>错误码：</div>
                <p></p>
                <div>
                    <?php echo $res->code; ?>
                </div>
                <p></p>
                <div>错误信息：</div>
                <p></p>
                <div>
                    <?php echo $res->msg; ?>
                </div>
            </div>
        <?php } else { ?>
            <div>
                <div>交易号：</div>
                <p></p>
                <div>
                    <?php echo $res->result->txid; ?>
                </div>
            </div>
        <?php } ?>
        <div>
            <p>
                <a href="index.php">回到首页</a>
            </p>
        </div>
    </body>

</html>


