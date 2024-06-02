<?php
include('connection.php');

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $Class=$_POST['Class'];
    $gender=$_POST['gender'];
    // Update student data
    $result = mysqli_query($conn, "UPDATE student SET name='$name',fname='$fname',
    mname='$mname',email='$email',dob='$dob',gender='$gender',address='$address',class='$Class' WHERE id=$id");
    // Redirect to homepage to display updated student details
    header("Location: studentdashboard.php");
}
?>