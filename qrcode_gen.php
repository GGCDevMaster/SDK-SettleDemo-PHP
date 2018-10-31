<?php

require_once __DIR__ . '/phpqrcode/phpqrcode.php';

$data = $_REQUEST['data'];

QRcode::png($data);
