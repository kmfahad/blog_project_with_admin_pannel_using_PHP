<?php
include 'Admin/db/db.php';

$select = "SELECT * from posts where post_status = 1 order by post_id desc 
           limit 3";
$ex = mysqli_query($con, $select);


$select_cat = "SELECT * from category";
$ex_cat = mysqli_query($con, $select_cat);
?>

<div class="col-lg-4">
    <div class="sidebar">
        <div class="row">
            <div class="col-lg-12">
                <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..."
                            autocomplete="on">
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                    </div>
                    <ul>
                        <?php
                        while ($row = mysqli_fetch_array($ex)) {
                            $id = $row['post_id'];
                            $title = $row['post_title'];
                            $date = date("M d, Y", strtotime($row['post_date']));
                            ?>
                            <li>
                                <a href="#" id="<?php echo $id; ?>">
                                    <h6><?php echo $title; ?></h6>
                                    <span><?php echo $date; ?></span>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                        <h2>Categories</h2>
                    </div>
                    <div class="content">
                        <ul>
                            <?php while ($row = mysqli_fetch_array($ex_cat)) { ?>
                                <li>
                                    <a href="#"><?php echo $row['category_name']; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>