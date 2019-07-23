<?php
    define("HOSTNAME", "localhost");
    define("HOST_NAME", "root");
    define("HOST_PASS", "SSSmmm123");
    define("DB_NAME","cms");
    $conn = mysqli_connect(HOSTNAME, HOST_NAME, HOST_PASS, DB_NAME);
    if (!$conn){
        die("connect failed " . mysqli_connect_error() . "<br><br>" . mysqli_connect_errno());
    }
    else{
    echo "connect";
    }
        
?>

