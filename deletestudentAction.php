<?php
// Include database connection file
include_once("connection.php");
// Fetch student data based on id
$id = $_GET['id'];
$result = mysqli_query($conn, "DELETE FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);
header("Location: admindashboard.php");
?>