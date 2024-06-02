<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3>View Results</h3>
        <form method="POST" action="viewResultAction.php" class="mt-3">
            <div class="form-group">
                <label for="regNo">Id:
                    <input type="text" name="id" id="regNo" class="form-control" required>
                </label>
            </div>
            <button type="submit" class="btn btn-primary">View
                Results</button>
        </form>
    </div>
</body>

</html>