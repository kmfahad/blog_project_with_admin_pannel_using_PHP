<?php
include '../admin/db/db.php';
session_start();

$user_id = $_SESSION['user_id'];
$_SESSION['user_name'];
if ($user_id == null) {
    header("location: ./index.php");
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard-Blog</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once("includes/top_navigation.php"); ?>
    <div id="layoutSidenav">
        <?php include_once("includes/leftside_navigation.php"); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
                    if (isset($view)) {
                        if ($view == "dashboard") {
                            include_once("view/dashboard_view.php");
                        } elseif ($view == "add_post") {
                            include_once("view/add_post_view.php");
                        } elseif ($view == "view_post") {
                            include_once("view/view_post_view.php");
                        }
                    }
                    ?>
                </div>
            </main>
            <?php include_once("includes/footer.php") ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>