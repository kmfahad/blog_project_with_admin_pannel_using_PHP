<?php
session_start();
include 'admin/db/db.php';
$select = "SELECT * from category";
$ex = mysqli_query($con, $select);

?>

<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">


            <a class="navbar-brand" href="index.php">
                <h2>Fahad's BLOG<em>.</em></h2>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto align-items-center">


                    <?php while ($data = mysqli_fetch_array($ex)) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?id=<?php echo $data['id']; ?>">
                                <?php echo $data['category_name']; ?>
                            </a>
                        </li>
                    <?php } ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>

                    <?php if (isset($_SESSION['user_id'])) { ?>

                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-user fa-fw"></i>

                                <?php echo $_SESSION['user_name']; ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="./users/dashboard.php">Dashboard</a>
                                <a class="dropdown-item" href="./users/add_post.php">Add Post</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="./users/logout.php">Logout</a>
                            </div>
                        </li>
                    <?php } else { ?>

                        <li class="nav-item ml-3">
                            <a class="btn btn-outline-primary btn-sm" href="./users/login.php">Login</a>
                        </li>

                        <li class="nav-item ml-2">
                            <a class="btn btn-primary btn-sm" href="./users/registration.php">Register</a>
                        </li>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>