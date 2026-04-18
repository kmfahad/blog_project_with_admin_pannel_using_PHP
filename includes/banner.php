<?php
include 'Admin/db/db.php';
$select = "SELECT posts .*, category.category_name from posts 
            join category on posts.post_category = category.id where post_status = 1 
            order by post_id desc";

$ex = mysqli_query($con, $select);
?>

<div class="main-banner header-text">
    <div class="container-fluid">

        <div class="owl-banner owl-carousel">

            <?php
            while ($row = mysqli_fetch_array($ex)) {
                ?>
                <div class="item">
                    <img height="250px" width="150px" src="uploads/<?php echo $row['post_img']; ?>" alt="">
                    <div class="item-content">
                        <div class="main-content">
                            <div class="text-dark meta-category">
                                <span><?php echo $row['category_name']; ?></span>
                            </div>
                            <a href="post-details.html">
                                <h3><a class="text-blue" href="#"
                                        id="<?php echo $row['post_id']; ?>"><?php echo $row['post_title']; ?>
                                </h3>
                            </a>

                        </div>
                    </div>
                </div>
            <?php } ?>



        </div>



    </div>
</div>
</div>