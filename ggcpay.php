<?php
require_once __DIR__ . '/config.php';
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>唤起GGC钱包支付</title>
    </head>
    <body>
        <h1>唤起GGC钱包支付</h1>
        <div>
            <form action="ggcpay_handler.php" method="post">
                <p></p>
                <div>通证数量(GGC)：</div>
                <p></p>
                <div>
                    <input type="text" name="amount" />
                </div>
                <p></p>
                <div>商品名：</div>
                <p></p>
                <div>
                    <input type="text" name="goods" />
                </div>
                <p></p>
                <div>http-method：</div>
                <p></p>
                <div>
                    <input type="text" name="method" value="POST" />
                </div>
                <p></p>
                <div>用户透传数据：</div>
                <p></p>
                <div>
                    <input type="text" name="user_data" />
                </div>
                <p></p>
                <div>
                    <button type="submit">提交</button>
                </div>
                <p></p>
                <div>
                    提示：唤起ggc支付到商家-<?php echo APP_NAME; ?>。本示例在手机上运行，同时所在手机需安装GGCpay钱包。
                </div>
            </form>
        </div>
    </body>

</html>


