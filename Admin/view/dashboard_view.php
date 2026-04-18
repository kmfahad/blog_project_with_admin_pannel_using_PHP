<?php
include 'db/db.php';

session_start();

if (!isset($_SESSION['email'])) {
    header("location:login.php");
}

$select_recent = "SELECT posts.*, category.category_name 
           FROM posts 
           left join category on posts.post_category = category.id 
           ORDER BY posts.post_id DESC 
           LIMIT 5";

$ex_recent = mysqli_query($con, $select_recent);
?>

<h2 class="bg-secondary text-white text-center p-2">Dashboard</h2>


<div class="card-header bg-secondary text-white mb-2">
    <i class="fas fa-table"></i> Recent Posts
</div>
<div class="col-lg-12">
    <table class="table table-bordered table-hover">

        <thead class="table-dark text-center">
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <?php while ($row = mysqli_fetch_array($ex_recent)) { ?>
                <tr>
                    <td><?= $row['post_title'] ?></td>
                    <td><?= $row['category_name'] ?></td>
                    <td><?= $row['post_author'] ?></td>

                    <td class="text-center">
                        <?php if ($row['post_status'] == 1) { ?>
                            <span class="badge bg-success">Published</span>
                        <?php } else { ?>
                            <span class="badge bg-danger">Inactive</span>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>