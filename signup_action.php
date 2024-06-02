<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page
    header('Location: login.php');
    exit;
}

$nameErr = $fnameErr = $mnameErr = $emailErr = $genderErr = $addressErr = $dobErr = $cpasswordErr =$groupErr=$ClassErr= "";
$name = $fname = $mname = $email = $gender = $pass = $address = $group = $dob = $Class= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include ('connection.php');
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = ($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["fname"])) {
        $fnameErr = "Father Name is required";
    } else {
        $fname = ($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST["mname"])) {
        $mnameErr = "Mother Name is required";
    } else {
        $mname = ($_POST["mname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $mname)) {
            $mnameErr = "Only letters and white space allowed";
        }
    }


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = ($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["address"])) {
        $addressErr = "Address is required";
    } else {
        $address = ($_POST["address"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = ($_POST["gender"]);
    }
    if (empty($_POST["dob"])) {
        $dobErr = "DOB is required";
    } else {
        $dob = ($_POST["dob"]);
    }
    // if (empty($_POST["group"])) {
    //     $groupErr= "Group is required";
    // } else {
    //     $group = ($_POST["group"]);
    // }
    if ($_POST['password'] == $_POST['cpassword']) {
        $pass =($_POST['password']);
    }else{
        $cpasswordErr="Password must be same in Password and confirm password field";
    }
    if (empty($_POST["Class"])) {
        $groupErr= "Class is required";
    } else {
        $Class = ($_POST["Class"]);
    }
    $sql = "INSERT INTO student(name,fname, mname,email,gender,dob,address,password,class)
        VALUES ('$name', '$fname', '$mname','$email','$gender','$dob','$address','$pass','$Class')";
    if ($conn->query($sql) === TRUE) {
        header('Location: admindashboard.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}

?>