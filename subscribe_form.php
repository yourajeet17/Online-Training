<?php
include "dbCon.php";
 
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
$user_email = $conn->real_escape_string($_REQUEST['user_email']);

$sql = "INSERT INTO subscribe_form (user_email) VALUES ('$user_email')";
if($conn->query($sql) === true){
    echo "<script>alert('We will contact you as soon as possible');</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

$conn->close();
?>