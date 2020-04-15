<?php     
    $host = "193.226.29.22";  
    $user = "htv";  
    $password = "HTVpass1@";  
    $db_name = "hackthevirus";  
      
    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  