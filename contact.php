<?php
include('connection.php');
$name = $email = $subject = $message = "";
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
    
    
    $sql = "INSERT INTO contact(name,email,subject,message)
        VALUES ('$name', '$email','$subject','$message')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
?>