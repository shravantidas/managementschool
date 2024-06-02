<?php // Assuming you have a database connection established
    include('connection.php');
    include('header.php');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    // Get registration number from the form
    if(isset($_POST['regNo'])) {
        $regNo=$_POST['regNo'];
    }

        // Query to fetch student details based on registration number
        
        $sql="SELECT * FROM student WHERE id = $regNo";
        $result=$conn->query($sql);
        while( $row=$result->fetch_assoc()){
            
echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    #detail .form-group label {
        font-weight: bold;
        font-size: 17px;
    }

    #detail .form-group span {
        font-size: 16px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Student Details: </h2>
        <table class="table table-bordered">

            <tr>
                <th>Name: </th>
                <td>'.$row['name'].'</td>
</tr>


<tr>
    <th>Father Name: </th>
    <td>'.$row['fname'].'</td>
</tr>
<tr>
<th>Mother Name: </th>
<td>'.$row['mname'].'</td>
</tr>
<tr>
<th>Email: </th>
<td>'.$row['email'].'</td>
</tr>
<tr>
<th>Date Of Birth: </th>
<td>'.$row['dob'].'</td>
</tr>
<tr>
<th>Gender: </th>
<td>'.$row['gender'].'</td>
</tr>
<tr>
<th>Address: </th>
<td>'.$row['address'].'</td>
</tr>
<tr>
<th>Class: </th>
<td>'.$row['class'].'</td>
</tr>


</table>
</div>
</body>

</html>'; }
include('footer.php');
?>