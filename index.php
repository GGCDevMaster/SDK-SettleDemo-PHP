<?php
require_once __DIR__ . '/config.php';
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>接口调用示例-<?php echo APP_NAME; ?></title>
        <script>
        function wakeup(url){
            location.href = url;
            if(w==null)
                alert('不支持');
            return true;
        }
        </script>
    </head>
    <body>
        <h1>接口调用示例-<?php echo APP_NAME; ?></h1>
        <div>
            <div>
                <p>1. <a href="ggcpay.php" target="_blank">唤起GGC钱包支付</a></p>
            </div>
            <div>
                <p>2. <a href="send.php" target="_blank">向某个玩家发送指定数量的通证</a></p>
            </div>
            <div>
                <p>3. <a href="txdetail.php" target="_blank">交易详情</a></p>
            </div>
            <div>
                <p>4. <a href="notify_view.php" target="_blank">查看回调结果</a></p>
            </div>
        </div>
        <h1>其它接口示例</h1>
        <div>
            <div>
                <p><a href="ext/index.php" target="_blank">查看</a></p>
            </div>
        </div>
        <h1>环境测试</h1>
        <div>
            <div>
                <p><a href="ggcpay:GfN5WNHaCkauwQU52yEqSFPPAdMqeW7W4r">唤起钱包APP</a></p>
            </div>
            <div>
                <p>
                    <button onclick="wakeup('ggc:GfN5WNHaCkauwQU52yEqSFPPAdMqeW7W4r')">唤起钱包APP</button>
                </p>
            </div>
        </div>
    </body>

</html>


