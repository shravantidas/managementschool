<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h1 class="mt-4 mb-4">Instructor Dashboard</h1>
        <!-- Login Form -->
        <?php if(!isset($_SESSION['user'])): ?>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form method="post" action="login.php" class="mt-4">
                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
        <?php endif; ?>

        <!-- Dashboard Content -->
        <?php if(isset($_SESSION['user'])): ?>
        <div class="row">
            <div class="col-md-6">
                <h2>Courses</h2>
                <ul>
                    <li>Course 1</li>
                    <li>Course 2</li>
                    <li>Course 3</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Students</h2>
                <ul>
                    <li>Student 1</li>
                    <li>Student 2</li>
                    <li>Student 3</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h2>Grades</h2>
                <form method="post" action="grades.php">
                    <div class="form-group">
                        <label for="student">Student</label>
                        <select class="form-control" id="student" name="student" required>
                            <option value="">Select Student</option>
                            <option value="1">Student 1</option>
                            <option value="2">Student 2</option>
                            <option value="3">Student 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="grade">Grade</label>
                        <input type="text" class="form-control" id="grade" name="grade" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Grade</button>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>