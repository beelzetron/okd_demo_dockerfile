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
    <p>
    <h1>
    Hello!
    </h1>
    </p>
    <p>
    <h2>
    I am " . $hostname . " and I am a container.
    </h2>
    </p>
    <p>
    <h3>
    My IP address is " . $_SERVER['SERVER_ADDR'] . ", you invoked me at " . $current_date . "<br>
    using this browser:</p>" . 
    "<p style="font-family:courier;">" . $_SERVER['HTTP_USER_AGENT'] . "</p>" . "
    </h3>
    <p>
    <em>Powered by<br>
    <img src='image001.png'></em>
    </p>
    <p>
    <em>version 1.0</em>
    </p>
    </body>
    </html>";

print($str);
?>