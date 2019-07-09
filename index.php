<?php
date_default_timezone_set('Europe/Rome');
$current_date = date('d/m/Y H:i:s');
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
    I am " . $_SERVER['SERVER_NAME'] . " and I am a container.
    </h2>
    </p>
    <p>
    <h3>
    My IP address is " . $_SERVER['SERVER_ADDR'] . ", you invoked me at " . $current_date . "<br>
    using this browser:\n" . $_SERVER['HTTP_USER_AGENT'] . "
    </h3>
    </p>
    <p>
    <em>Powered by<br>
    <img src='assets/image001.png'></em>
    </p>
    </body>
    </html>";

print($str);
?>