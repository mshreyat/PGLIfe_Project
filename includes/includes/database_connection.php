<?php
    $conn = mysql_connect("127.0.0.1", "root", "", "pglife");
    if(mysql_connect_errno()){
        die("Failed to connect to MySQL: " . mysql_connect_error());
    }
?>