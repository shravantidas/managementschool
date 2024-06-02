<?php
// Include database connection file
include_once("connection.php");

// Check if form is submitted for updating student
if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $Class=$_POST['Class'];
    echo "$id";
    // Update student data
    $result = mysqli_query($conn, "UPDATE student SET name='$name',fname='$fname',mname='$mname',
    email='$email',dob='$dob',gender='$gender',address='$address', class='$Class' WHERE id=$id");

    // Redirect to homepage to display updated student details
    header("Location: admindashboard.php");
}

// Fetch student data based on id
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM student WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit Student Details</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label for="name">FatherName:</label>
                <input type="name" class="form-control" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
            </div>
            <div class="form-group">
                <label for="name">MotherName:</label>
                <input type="name" class="form-control" id="mname" name="mname" value="<?php echo $row['mname']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="dob">DateOfBirth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $row['dob']; ?>">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?php echo $row['gender']; ?>">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="<?php echo $row['address']; ?>">
            </div>
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="text" class="form-control" id="Class" name="Class" value="<?php echo $row['class']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>

</html>