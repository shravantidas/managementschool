<?php
// Include database connection file
include("connection.php");

// Check if form is submitted for updating student
// if(isset($_POST['update'])) {
//     $id = $_POST['id'];
    
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['address'];

//     // Update student data
//     $result = mysqli_query($conn, "UPDATE student SET name='$name',email='$email',address='$phone' WHERE id=$id");

//     // Redirect to homepage to display updated student details
//     header("Location: admindashboard.php");
// }

// Fetch all students data
$result = mysqli_query($conn, "SELECT * FROM student");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Student Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>FatherName</th>
                    <th>MotherName</th>
                    <th>Email</th>
                    <th>DateOfBirth</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Class</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['mname']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['dob']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['class']."</td>";
                echo "<td><a href='deletestudentAction.php?id=".$row['id']."' class='btn btn-danger'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</body>

</html>