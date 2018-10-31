<?php
require_once __DIR__ . '/config.php';

$goods = trim($_POST['goods']);
$method = trim($_POST['method']);
$user_data = trim($_POST['user_data']);
$amount = trim($_POST['amount']);
$notify_url = NOTIFY_URL;

//参数
$post_data = [
    'goods' => $goods,
    'method' => $method,
    'user_data' => $user_data,
    'amount' => $amount,
    'notify_url' => $notify_url,
];
//签名
$post_data['sign'] = sign($post_data);

$url = 'ggcpay:pay?app_id=' . APP_ID . '&app_key=' . APP_KEY;
foreach ($post_data as $key => $value) {
    $url .= "&" . $key . "=" . urlencode($value);
}
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>唤起GGC钱包支付-第二步</title>
    </head>
    <body>
        <h1>唤起GGC钱包支付-第二步</h1>
        <div>
            <p></p>
            <div>Url-Schema：</div>
            <p></p>
            <div>
                <textarea cols="500" rows="5"><?php echo htmlentities($url); ?></textarea>
            </div>
            <p></p>
            <div>
                <a href="<?php echo $url; ?>">点击这里【唤起钱包APP】</a>
            </div>
            <p></p>
            <div>
                或使用GGC钱包扫描以下二维码：
            </div>
            <p></p>
            <div>
                <img src="qrcode_gen.php?data=<?php echo urlencode($url);?>" width="200" height="200" />
            </div>
            <p></p>
        </div>
        <div>
            <p>
                <a href="index.php">回到首页</a>
            </p>
        </div>
    </body>

</html>


