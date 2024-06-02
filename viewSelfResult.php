<?php
// Include database connection file
include_once("connection.php");
session_start();
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
        $email=$_SESSION['username'];
        $sql="SELECT * FROM student WHERE email = '$email'";
        $result=$conn->query($sql);
        $id=0;
        while($row = mysqli_fetch_array($result)){
            $id=$row['id'];
        }
        $sql="SELECT * FROM result WHERE id = $id";
        $result=$conn->query($sql);
        $totalMark=0;
            $totalSubject=0;
            $id=null;
   echo '<div class="container mt-5">
        <h2>Student Details</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Instructor</th>
                    <th>Class</th>
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
                echo "<td>".$row['instructor']."</td>";
                echo "<td>".$row['class']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['mark']."</td>";
                $GPA=null;
                $mark=$row['mark'];
                $Grade=null;
                if($mark>=79.50){
                   $GPA=5.00; 
                   $Grade='A+';
                }else if($mark<=79.50 && $mark>=69.50){
                    $GPA=4.00;
                    $Grade='A';
                }else if($mark<=69.50 && $mark>=59.50){
                    $GPA=3.50;
                    $Grade='A-';
                }else if($mark<=59.50 && $mark>=49.50){
                    $GPA=3.00;
                    $Grade='B';
                }else if($mark<=49.50 && $mark>=39.50){
                    $GPA=2.50;
                    $Grade='C';
                }else if($mark<=39.50 && $mark>=33){
                    $GPA=2.00;
                    $Grade='D';
                }else{
                    $GPA=0.00;
                    $Grade='F';
                }
                $totalMark +=$GPA;
                $totalSubject +=1;

                
                echo "<td>".$Grade."</td>";
                echo "</tr>";
            }
    echo'</tbody>
    </table>';
    if($totalSubject==0){
        $res=0;
    }
    else{
        $res=$totalMark/$totalSubject;
    }
    echo "<input type='submit' class='mb-3 btn btn-success' value='Average GPA: $res'>";
    ?>
    </div>

</body>

</html>