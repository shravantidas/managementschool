<?php
// Include database connection file
include_once("connection.php");
session_start();
// Check if form is submitted for updating student

// Fetch student data based on id
$email = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE email='$email'");
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Student Profile</h2>
        <form method="post" action="editStudentAction.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Father Name:</label>
                <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Mother Name:</label>
                <input type="text" class="form-control" id="mname" name="mname" value="<?php echo $row['mname']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="<?php echo $row['address']; ?>">
            </div>
            <div class="form-group">
                <label for="group">Class:</label>
                <input type="text" class="form-control" id="Class" name="Class" value="<?php echo $row['class']; ?>">
            </div>
            <div class="form-group">
                <label for="group">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['gender']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="update" class="btn btn-primary mb-3">Update</button>
        </form>
    </div>

</body>

</html>