<?php

require_once __DIR__.'/config.php';

?>
<html>
    <head>
        <meta charset="utf8" />
        <title>交易详情</title>
    </head>
    <body>
        <h1>交易详情-<?php echo APP_NAME;?></h1>
        <div>
            <form action="txdetail_handler.php" method="post">
                <p></p>
                <div>交易号：</div>
                <p></p>
                <div>
                    <input type="text" name="txid" />
                </div>
                <p></p>
                <div>
                    <button type="submit">查看</button>
                </div>
                <p></p>
            </form>
        </div>
    </body>
    
</html>