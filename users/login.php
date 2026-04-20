<?php
include '../admin/db/db.php';
session_start();

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    // Check user
    $select = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
    $ex = mysqli_query($con, $select);

    if (mysqli_num_rows($ex) > 0) {

        $user = mysqli_fetch_assoc($ex);

        // Store session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        // Redirect to index page
        header("Location: ../index.php");
        exit();

    } else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<h1 class="bg-dark text-white p-2 text-center">User Login</h1>

<body class="bg-primary">

<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">

                            <div class="card-header">
                                <h3 class="text-center my-4">Login</h3>
                            </div>

                            <div class="card-body">
                                <form method="post">

                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control">

                                    <label>Password</label>
                                    <input type="password" name="pass" class="form-control">

                                    <br>
                                    <button class="btn btn-primary p-2" name="login">Login</button>
                                </form>

                                <br>
                                <a href="registration.php">
                                    <button class="btn btn-success p-2">Create Account</button>
                                </a>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

</body>
</html>