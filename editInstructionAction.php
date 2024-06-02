<?php
include('connection.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $group=$_POST['group'];
    // echo $id;
    // Update student data
    $result = mysqli_query($conn, "UPDATE instructor SET name='$name',
    email='$email',phone='$phone',address='$address',dept='$group' WHERE instructor_id=$id");
    // Redirect to homepage to display updated student details
    header("Location: instructordashboard.php");
}
?>