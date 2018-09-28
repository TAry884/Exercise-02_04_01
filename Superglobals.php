<!doctype html>

<!-- 
Author: Ty Ary
Date: 9.25.18

Filename: Superglobals.php
-->

<html>
    
    <head>
        <title>Superglobals</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0" />
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h1>Superglobals</h1>
        <?php
        //Echos to find what the server is running on with superglobals
        echo "<h3>Superglobal array \$server[]</h3>";
        echo "<p>The name of the current script is: ", $_SERVER["SCRIPT_NAME"], "</br>";
        echo "This script was executed with the following server software: ", $_SERVER["SERVER_SOFTWARE"], "</br>";
        echo "This script was requested witht he following server protocol: ", $_SERVER['SERVER_PROTOCOL'], "</br>";
        echo "This script is running on the following server name: ", $_SERVER['SERVER_NAME'], "</br>";
        echo "This script is running on the following server address: ", $_SERVER['SERVER_ADDR'], "</br>";
        echo "This script is running on the following gateway interface: ",  $_SERVER['GATEWAY_INTERFACE'], "</br>";
        echo "This script is running on the following request method: ", $_SERVER['REQUEST_METHOD'], "</br>";
        ?>
    </body>
    
</html>