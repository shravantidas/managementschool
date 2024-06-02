<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page
    header('Location: login.php');
    exit;
}
$nameErr = $emailErr =$fnameErr=$mnameErr=$genderErr = $addressErr = $dobErr= $cpasswordErr=$groupErr=$ClassErr="";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Student Details Registration Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    /* body {
        background-color: #f2f2f2;
    } */

    /* .container {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    } */
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-4">Student Details Registration</h2>
        <form method="POST" action="signup_action.php">

            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter your full name">
                <span class="error"><?php echo $nameErr;?></span>
            </div>
            <div class="form-group">
                <label for="fullName">Father's Name</label>
                <input type="text" class="form-control" name="fname" id=" fullName"
                    placeholder="Enter your father's name">
                <span class="error"><?php echo $fnameErr;?></span>
            </div>
            <div class="form-group">
                <label for="fullName">Mother's Name</label>
                <input type="text" class="form-control" id="fullName" name="mname"
                    placeholder="Enter your mother's name">
                <span class="error"><?php echo $mnameErr;?></span>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                <span class="error"><?php echo $emailErr;?></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="Enter your password" required>
                <!-- <input type="password" id="psw" name="password" required> -->
            </div>
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" name="cpassword" id="password"
                    placeholder="Confirm your password">
                <span class="error"><?php echo $cpasswordErr;?></span>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob">
                    <span class="error"><?php echo $dobErr;?></span>
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender" id="gender">
                        <option selected>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                    <span class="error"><?php echo $genderErr;?></span>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"
                    placeholder="Enter your address"></textarea>
                <span class="error"><?php echo $addressErr;?></span>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" class="form-control" id="fullName" name="Class" placeholder="Enter your Class">
                <span class="error"><?php echo $ClassErr;?></span>
            </div>
            <!-- <div class="form-group">
                <label for="course">Group</label>
                <select class="form-control" name="group" id="group">
                    <option selected>Select</option>
                    <option>Science</option>
                    <option>Arts</option>
                    <option>Commerce</option>
                    <option>Other</option>
                </select>
                <span class="error"><?php echo $groupErr;?></span>
            </div> -->
            <button type="submit" class="btn btn-primary mb-4">Register</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>