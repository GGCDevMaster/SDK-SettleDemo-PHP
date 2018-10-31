<?php
require_once __DIR__ . '/config.php';
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>向某个玩家发送指定数量的通证</title>
    </head>
    <body>
        <h1>发送通证-<?php echo APP_NAME; ?></h1>
        <div>
            <form action="send_handler.php" method="post">
                <div>玩家游戏钱包地址：</div>
                <p></p>
                <div>
                    <input type="text" name="to_address" />
                </div>
                <p></p>
                <div>将要发送的通证数量：</div>
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
                    <button type="submit">发送</button>
                </div>
            </form>
        </div>
    </body>

</html>


