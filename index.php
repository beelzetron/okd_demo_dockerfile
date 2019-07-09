<?php
    print("
    <!DOCTYPE html>
    <html>
    <head>
    <title>Hello!</title>
    <style>
    * {
        font-family: Verdana, Geneva, sans-serif;
    }
    </style>
    </head>
    <body>
    <p>
    <h2>
        Hi! I am $_SERVER['SERVER_NAME'] and I am a container.
    </h2>
    </p>
    <p>
    <h3>
        My IP address is $_SERVER['SERVER_ADDR'], you invoked me at $_SERVER['REQUEST_TIME']<br>
        using this browser:\n$_SERVER['HTTP_USER_AGENT']
    </h3>
    </p>
    <p style='text-align:center;'>
    <em>Powered by <img src='assets/image001.png'></em>
    </p>
    </body>
    </html>
");
?>