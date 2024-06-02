<?php
// Include database connection file
include_once("connection.php");

// Check if form is submitted for updating student
// if(isset($_POST['update'])) {
//     $id = $_POST['id'];
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['address'];
//     // Update student data
//     $result = mysqli_query($conn, "UPDATE student SET name='$name',email='$email',address='$phone' WHERE id=$id");

//     // Redirect to homepage to display updated student details
//     header("Location: instructordashboard.php");
// }

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

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $id=$_POST['id'];
        $sql="SELECT * FROM result WHERE id = $id";
        $result=$conn->query($sql);
        $totalMark=0;
            $totalSubject=0;
           
   echo '<div class="container mt-5">
        <h2>Student Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Instructor</th>
                    <th>Subject</th>
                    <th>Mark</th>
                    <th>GPA</th>
                </tr>
            </thead>
            <tbody>';
            
            while($row = mysqli_fetch_array($result)) {
                $id=$row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['class']."</td>";
                echo "<td>".$row['instructor']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['mark']."</td>";
                
                $GPA=null;
                $grade=null;
                $mark=$row['mark'];
                if($mark>=79.50){
                   $GPA=5.00; 
                   $grade="A+";
                }else if($mark<=79.50 && $mark>=69.50){
                    $GPA=4.00;
                    $grade="A";
                }else if($mark<=69.50 && $mark>=59.50){
                    $GPA=3.50;
                    $grade="A-";
                }else if($mark<=59.50 && $mark>=49.50){
                    $GPA=3.00;
                    $grade="B";
                }else if($mark<=49.50 && $mark>=39.50){
                    $GPA=2.50;
                    $grade="C";
                }else if($mark<=39.50 && $mark>=33){
                    $GPA=2.00;
                    $grade="D";
                }else{
                    $GPA = 0.00;
                    $grade = "F"; 
                }
                $totalMark +=$GPA;
                $totalSubject +=1;
                echo "<td>". $grade."</td>";
                echo "</tr>";
            }
    
    }
        
        
    echo'</tbody>
    </table>';
    // echo "$totalMark <br>";
    // echo $totalSubject;
    
    $res=$totalMark/$totalSubject;
    echo "<input type='submit' class='btn btn-success' value='Average GPA: $res'>";
    //echo "<a href='editStudent.php?id=".$id."' class='float-right btn btn-primary'>Edit</a>";
    ?>
    </div>

</body>

</html>