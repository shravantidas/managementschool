<?php
// session_start();

// Check if user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to login page
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Your custom CSS file -->
</head>
<?php
        include('header.php');
    ?>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" id="enroll" href="#">
                                Enroll Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="viewstudent" href="#">
                                View Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="updatestudent" href="#">
                                Update Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="deleteStudent" href="#">
                                Delete Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="viewResult" href=" #">
                                View Result
                            </a>
                        </li>
                        <!-- Add more navigation links as needed -->
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-8 ml-sm-auto col-lg-10 px-md-4">
                <div class="pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-center">Admin Dashboard</h1>
                </div>

                <!-- Your dashboard content goes here -->
                <div class="row">
                    <div id="content">

                    </div>
                </div>
                <!-- Add more cards, charts, tables, etc., as needed -->
            </main>
        </div>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        // Load another page when link is clicked
        $('#enroll').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('register.php'); // Load content from another PHP file
        });

        $('#viewstudent').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('viewstudent.php'); // Load content from another PHP file
        });

        $('#updatestudent').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('updatestudent.php'); // Load content from another PHP file
        });

        $('#deleteStudent').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('deleteStudent.php'); // Load content from another PHP file
        });
        $('#viewResult').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('viewResult.php'); // Load content from another PHP file
        });

    });
    </script>
</body>

</html>
<?php
        include('footer.php');
    ?>