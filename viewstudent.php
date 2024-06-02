<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student Details</title>
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
        <h3>View Student Details</h3>
        <form method="POST" action="viewaction.php" class="mt-3">
            <div class="form-group">
                <label for="regNo">Registration Number:</label>
                <input type="text" name="regNo" id="regNo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary" id="viewaction">View
                Details</button>
        </form>
    </div>

</body>

</html>