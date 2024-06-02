<?php // Assuming you have a database connection established
    include('connection.php');
    session_start();
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    // Query to fetch student details based on registration number
    $email= $_SESSION['username'];
    $sql="SELECT * FROM instructor WHERE email='$email'";
    $result=$conn->query($sql);
    while($row=$result->fetch_assoc()){  
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Profile</title>
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
        <h2>Instructor Profile: </h2>
        <table class="table table-bordered">

            <tr>
                <th>Name: </th>
                <td>'.$row['name'].'</td>
</tr>
<tr>
<th>Email: </th>
<td>'.$row['email'].'</td>
</tr>

<tr>
<th>Phone: </th>
<td>'.$row['phone'].'</td>
</tr>
<tr>
<th>Address: </th>
<td>'.$row['address'].'</td>
</tr>
<tr>
<th>Group: </th>
<td>'.$row['dept'].'</td>
</tr>
</table>
</div>
</body>
</html>'; }
?>