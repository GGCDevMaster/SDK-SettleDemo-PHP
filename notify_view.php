<?php
require_once __DIR__ . '/config.php';


//日志文件
$file = __DIR__ . DIRECTORY_SEPARATOR . 'notify_data.log';

if (!empty($_POST['clean'])) {
    file_put_contents($file, $data);
    header('location:index.php');
    exit;
} else {
    $data = file_get_contents($file);
}
?>
<html>
    <head>
        <meta charset="utf8" />
        <title>回调日志</title>
    </head>
    <body>
        <h1>回调日志</h1>
        <form  method="post">
            <p></p>
            <div>
                <textarea style="width: 100%;height: 300px;"><?php echo $data; ?></textarea>
            </div>
            <p></p>
            <div>
                <input type="hidden" name="clean" value="1" />
                <button type="submit">清除日志</button>
            </div>
            <div>
            <p>
                <a href="index.php">回到首页</a>
            </p>
        </div>
        </form>
    </body>

</html>