<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>

<?php
include ("connect.php");
if(isset($_POST["login"])){
    extract ($_POST);
    $obj->login($email,$pass);
}
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-border shadow border-3">
                    <div class="card-header bg-danger text-white fs-3 fw-bold">
                        Login Form
                    </div>
                    <div class="card-body ">
                        <form method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" required name="email" id="email" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" required name="pass" id="password" placeholder="Enter your password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                            <a type="button" href="signup.php" class="btn btn-secondary">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js CDN (for Bootstrap modal) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
