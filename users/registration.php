<?php
include '../admin/db/db.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['pass'];

    if (isset($_POST['terms_cond'])) {
        $terms_cond = $_POST['terms_cond'];

        if ($terms_cond == 1) {

            $checkMail = "SELECT email from users where email = '$email'";
            $exMail = mysqli_query($con, $checkMail);
            $count = mysqli_num_rows($exMail);

            if ($count > 0) {
                echo "<script> alert('Email is already exists...') </script>";
            } else {
                $insert = "INSERT into users (name, email, phone, term_cond, pass) values ('$name','$email','$phone', '$terms_cond', '$pass')";
                $ex = mysqli_query($con, $insert);
                if ($ex) {
                    $select = "SELECT *from users where id = $id";
                    $fetch = mysqli_fetch_array($fetch);

                } else {
                    echo "<script> alert('Registration Failed') </script>";
                }
            }

        }
    } else {
        echo "<script>alert('Need to select terms and condition')</script>";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>


<h1 class="bg-dark text-white p-2 text-center">User Registration</h1>

<body class="bg-primary">

    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Registration</h3>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <label for="">Enter Your Name</label>
                                        <input type="text" placeholder="write..." name="name" class="form-control">
                                        <label for="">Enter Your Email</label>
                                        <input type="email" name="email" class="form-control"></input>
                                        <label for="">Enter Phone Number</label>
                                        <input type="number" placeholder="write..." name="phone" class="form-control">
                                        <label for="">Enter Password</label>
                                        <input type="password" placeholder="write..." name="pass" class="form-control">
                                        <label for="">Accept Terms and Conditions</label>
                                        <input type="checkbox" value="1" name="terms_cond"><br>
                                        <button class="btn btn-primary p-2" name="submit" href="">Submit</button>
                                    </form>
                                    <br><a href="login.php"><button class="btn btn-success p-2">Login</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>