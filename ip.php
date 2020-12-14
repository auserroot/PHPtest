<?php
    $ip = file_get_contents('https://api.myip.la');
    echo "My public IP address is: " . $ip;
?>
