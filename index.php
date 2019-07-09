<?php
date_default_timezone_set('Europe/Rome');
$current_date = date('d/m/Y H:i:s');
$hostname = gethostname();
$str = "
<!DOCTYPE html>
<html>
<head>
<title>Hello!</title>
<style>
* {
    text-align: center;
    font-family: Verdana, Geneva, sans-serif;
}
</style>
</head>
<body>
<h1>
<p>Hello!</p>
</h1>
<h2>
<p>I am</p>
<p style='font-family:courier;'> " . $hostname . "</p>
<p> and I am a container.</p>
</h2>
<h4>
<p>My IP address is</p>
<p style='font-family:courier;'>" . $_SERVER['SERVER_ADDR'] . "</p>
<p>you invoked me at " . $current_date . "</p>
<p>using this browser:</p>" . "
<p style='font-family:courier;'>" . $_SERVER['HTTP_USER_AGENT'] . "</p>
</h4>
<p><em>Powered by<br>
<img src='image001.png'></em></p>
<p><em>version 1.1</em></p>
</body>
</html>";

print($str);
?>
