<?php 
    $db_host ="localhost";
    $db_user ="root";
    $db_password ="";
    $db_name ="online_training_system"; 

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>