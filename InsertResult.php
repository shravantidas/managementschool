<?php
include('connection.php');
// // Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
 

//     // Prepare and bind SQL statement
//     $stmt = $conn->prepare("INSERT INTO result (id,name,class,dept,subject,instructor,mark,gpa) VALUES (?, ?,?,?,?,?,?,?)");
//     $stmt->bind_param("ss", $name, $email);

//     // Loop through each row of data
//     foreach ($_POST['name'] as $key => $value) {
//         $name = $_POST['name'][$key];
//         $email = $_POST['email'][$key];
//         $stmt->execute();
//     }

//     // Close statement and database connection
//     $stmt->close();
//     $conn->close();

//     // Redirect back to form or show success message
//     echo "Data inserted successfully!";
// } else {
//     // Redirect back to form or show error message
//     echo "Error: Form not submitted!";
// }
?>
<?php

// Collect input values
$id = $_POST['id'];
$name = $_POST['name'];
$Class = $_POST['class'];
$subject = $_POST['subject'];
$instructor = $_POST['instructor'];
$Mark = $_POST['mark'];

// Prepare and execute the SQL INSERT statement within a loop
for ($i = 0; $i < count($id); $i++) {
    // echo "$id[$i], $name[$i] , $Class[$i] , $group[$i], $subject[$i], $instructor[$i], $Mark[$i] , $GPA[$i] \n";
    // $column1 = $conn->real_escape_string($column1_values[$i]);
    // $column2 = $conn->real_escape_string($column2_values[$i]);
    // $column3 = $conn->real_escape_string($column3_values[$i]);
    $GPA='';
    $mark=$Mark[$i];
    if($mark>=79.50){
       $GPA='A+'; 
    }else if($mark<=79.50 && $mark>=69.50){
        $GPA='A';
    }else if($mark<=69.50 && $mark>=59.50){
        $GPA='A-';
    }else if($mark<=59.50 && $mark>=49.50){
        $GPA='B';
    }else if($mark<=49.50 && $mark>=39.50){
        $GPA='C';
    }else if($mark<=39.50 && $mark>=33){
        $GPA='D';
    }else{
        $GPA='F';
    }
    $result = mysqli_query($conn, "SELECT * FROM result where id=$id[$i] and subject='$subject'");
    $row= mysqli_fetch_array($result);

    if($row>0){
        echo "The mark of id $id[$i] and Subject $subject exist. <\br>";
        continue;
    }else{
    $sql = "INSERT INTO result (id,name,class,subject,instructor,mark,gpa) VALUES ($id[$i], '$name[$i]' , '$Class[$i]', '$subject', '$instructor[$i]', '$Mark[$i]' , '$GPA')";

    if ($conn->query($sql) !== TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }else{
        header('Location:instructordashboard.php');
    }
}
}

// Close the database connection
// $conn->close();
?>