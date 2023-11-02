<?php
include("connect.php"); // Apne database connection file ko include karein

if (isset($_POST["signup"])) {
    extract($_POST);
    // Passwords match karne ka check
    if ($password === $confirmPassword) {
        // Insert query to add user information to the "users" table
        $insertQuery = "INSERT INTO registration VALUES ('','$name', '$email', '$password')";

        // Query ko execute karein
        if ($obj->dataquery($insertQuery) === TRUE) {
            // User signup successful, aap kisi desired page pe redirect kar sakte hain
            header("Location: index.php"); // Example: Login page
        } else {
            echo "<script>alert('Something went wrong...');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-border shadow border-3">
                    <div class="card-header bg-primary text-white fs-3 fw-bold">
                        Signup Form
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                            </div>
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm your password">
                            </div>
                            <button type="submit" name="signup" class="btn btn-primary">Signup</button>
                            <a type="button" href="login.php" class="btn btn-secondary">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
