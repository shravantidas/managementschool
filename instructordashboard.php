<?php
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
                            <a class="nav-link" id="viewInstructor" href="#">
                                Show Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="editInstructor" href="#">
                                Edit Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="viewstudent" href="#">
                                View Student
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="inputResult" href="#">
                                Input Result
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="viewResult" href="#">
                                Show Result
                            </a>
                        </li>
                        <!-- Add more navigation links as needed -->
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-8 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 align-items-center">Instructor Dashboard</h1>
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
        $('#viewInstructor').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('viewInstructor.php'); // Load content from another PHP file
        });

        $('#editInstructor').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('editInstructor.php'); // Load content from another PHP file
        });

        $('#viewstudent').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('viewstudent.php'); // Load content from another PHP file
        });

        $('#inputResult').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
            $('#content').load('inputResult.php'); // Load content from another PHP file
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