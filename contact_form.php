<?php
include "dbCon.php";
 
if($conn === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}
 
$user_name = $conn->real_escape_string($_REQUEST['user_name']);
$user_email = $conn->real_escape_string($_REQUEST['user_email']);
$user_subject = $conn->real_escape_string($_REQUEST['user_subject']);
$user_message = $conn->real_escape_string($_REQUEST['user_message']);
 

$sql = "INSERT INTO contact_form (user_name,user_email,user_subject,user_message) VALUES ('$user_name','$user_email','$user_subject','$user_message')";
if($conn->query($sql) === true){
    echo "<script>alert('We will contact you as soon as possible');</script>";
				echo "<script type='text/javascript'> document.location ='index.php'; </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

$conn->close();
?>