<?php

include 'admin/db/db.php';
$select = "SELECT * from category";
$ex = mysqli_query($con, $select);


?>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2>Fahad's BLOG<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <?php while ($data = mysqli_fetch_array($ex)) {

                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                            <?php echo $data['category_name']; ?>
                            </a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>