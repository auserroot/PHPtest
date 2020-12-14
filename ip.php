<?php
    $ip = file_get_contents('https://api.myip.net');
    echo "My public IP address is: " . $ip;
?>
