<!DOCTYPE html>
<html>

<head>
    <title>Edit Student Details</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Add custom styles if needed */
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Student Details</h2>
        <div class="table-responsive">
            <?php
        include('connection.php');
        // Update student record if form submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // $id = $_POST['id'];
            // $name = $_POST['name'];
            // $fname = $_POST['fname'];
            // $mname = $_POST['mname'];
            // $email = $_POST['email'];
            // $dob = $_POST['dob'];
            // $gender = $_POST['gender'];
            // $address = $_POST['address'];
            // $group = $_POST['group'];

            $id = isset($_POST['id']) ? $_POST['id'] : '';
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $fname = isset($_POST['fname']) ? $_POST['fname'] : '';
            $mname = isset($_POST['mname']) ? $_POST['mname'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
            $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
            $address = isset($_POST['address']) ? $_POST['address'] : '';
            $group = isset($_POST['group']) ? $_POST['group'] : '';

            // Update query
            $sql = "UPDATE student SET name='$name',fname='$fname',mname='$mname', 
            email='$email', dob='$dob',gender='$gender',dept='$group' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success' role='alert'>Record updated successfully</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error updating record: " . $conn->error . "</div>";
            }
        }

        // Fetch data from database
        $sql = "SELECT * FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>";
            echo "<thead><tr><th>ID</th><th>Name</th><th>FatherName</th><th>MotherName</th>
            <th>Email</th><th>DateOfBirth</th><th>Gender</th><th>Group</th>
            
            </tr></thead>";
            echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td><input type='text' class='form-control' name='name' value='" . $row['name'] . "'></td>";
                echo "<td><input type='text' class='form-control' fname='fname' value='" . $row['fname'] . "'></td>";
                echo "<td><input type='text' class='form-control' mname='mname' value='" . $row['mname'] . "'></td>";
                echo "<td><input type='email' class='form-control' email='email' value='" . $row['email'] . "'></td>";
                echo "<td><input type='text' class='form-control' dob='dob' value='" . $row['dob'] . "'></td>";
                echo "<td><input type='text' class='form-control' gender='gender' value='" . $row['gender'] . "'></td>";
                echo "<td><input type='text' class='form-control' dept='group' value='" . $row['dept'] . "'></td>";
                echo "<td><form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>
                <input type='hidden' name='id' value='" . $row['id'] . "'>
                <button type='submit' class='btn btn-primary'>Update</button></form></td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<div class='alert alert-warning' role='alert'>0 results</div>";
        }

        // Close connection
        $conn->close();
        ?>
        </div>
    </div>
</body>

</html>