<?php
// Include database connection file
include_once("connection.php");
session_start();
// Check if form is submitted for updating student
if(isset($_POST['update'])) {
    $Class = $_POST['regNo'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['address'];

    // Update student data
    $result = mysqli_query($conn, "UPDATE student SET name='$name',email='$email',address='$phone' WHERE class='$Class'");

    // Redirect to homepage to display updated student details
    header("Location: admindashboard.php");
}
$Class = $_POST['classNumber'];
$instructor= $_SESSION['username'];
// Fetch all students data
$result = mysqli_query($conn, "SELECT * FROM student where class='$Class'");
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
        <h2>Insert Result</h2>

        <form action="InsertResult.php" method="post">
            <div class="row">
                <div Class="col-md-12">
                    <div class="form-group">
                        <label for="sybject">Subject:</label>
                        <input type="text" name="subject" id="group" class="form-control" required>
                    </div>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Instructor</th>
                        <th>Mark</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td><input type='text' class='form-control' id='id' name='id[]' value='".$row['id']."'>
                </td>";
                echo "<td><input type='text' class='form-control' id='name' name='name[]' value='".$row['name']."'>
                </td>";
                echo "<td><input type='text' class='form-control' id='class' name='class[]' value='".$row['class']."'></td>" ; 
                
                echo "<td><input type='text' class='form-control' id='instructor' name='instructor[]'
                        value='$instructor'>
                </td>" ; 
                echo "<td><input type='text' class='form-control' id='mark' name='mark[]' value='' required>
                </td>" ; 
                
                // echo "<td>" .$row['name']."</td>";
                // echo "<td>".$row['class']."</td>";
                // echo "<td>".$row['dept']."</td>";
                // echo "<td>".$row['subject']."</td>";
                // echo "<td>".$row['instructor']."</td>";
                // echo "<td>".$row['mark']."</td>";
                // echo "<td>".$row['gpa']."</td>";
            
                echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            <input type="submit" class='btn btn-primary' value="Insert">
        </form>
    </div>

</body>

</html>