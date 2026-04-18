<div class="col-lg-8">
    <div class="all-blog-posts">
        <div class="row">

            <?php
            include 'Admin/db/db.php';

            $select = "SELECT posts .*, category.category_name from posts 
                    join category on posts.post_category = category.id where post_status = 1 
                    order by post_id desc";

            $ex = mysqli_query($con, $select);

            while ($row = mysqli_fetch_array($ex)) {
                ?>

                <div class="col-lg-12">
                    <div class="blog-post">

                        <!-- Image -->
                        <div class="blog-thumb">
                            <img height="400px" width="450px" src="uploads/<?php echo $row['post_img']; ?>" alt="">
                        </div>

                        <div class="blog-title mt-2">
                            <a href="#">
                                <h4 class="text-dark">
                                    <?php echo $row['post_title']; ?>
                                </h4>
                            </a>
                        </div>

                        <div class="down-content">

                            <a href="#"><span>
                                    <?php echo $row['category_name']; ?>
                                </span></a>


                            <ul class="post-info">
                                <li><a href="#">
                                        <?php echo $row['post_author']; ?>
                                    </a></li>
                                <li><a href="#">
                                        <?php echo $row['post_date']; ?>
                                    </a></li>
                                <li><a href="#">
                                        <?php echo $row['post_comment_count']; ?> Comments
                                    </a></li>
                            </ul>
                            <p>
                                <?php echo $row['post_summary']; ?>
                            </p>

                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>