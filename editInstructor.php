<?php
// Include database connection file
include_once("connection.php");
session_start();
// Check if form is submitted for updating student

// Fetch student data based on id
$email = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM instructor WHERE email='$email'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit instructor Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Edit instructor Profile</h2>
        <form method="post" action="editInstructionAction.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="dob">Phone:</label>
                <input type="text" class="form-control" id="dob" name="phone" value="<?php echo $row['phone']; ?>">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" name="address"
                    value="<?php echo $row['address']; ?>">
            </div>
            <div class="form-group">
                <label for="group">Group:</label>
                <input type="text" class="form-control" id="group" name="group" value="<?php echo $row['dept']; ?>">
            </div>
            <input type="hidden" name="id" value="<?php echo $row['instructor_id']; ?>">
            <button type="submit" name="update" class="btn btn-primary mb-3">Update</button>
        </form>
    </div>

</body>

</html>