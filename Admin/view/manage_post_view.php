<?php
include 'db/db.php';

if (isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];

    $delete = "DELETE FROM posts WHERE post_id = '$id'";
    mysqli_query($con, $delete);
}

if (isset($_POST['approveBtn'])) {
    $id = $_POST['id'];

    $approve = "UPDATE posts SET post_status = 1 WHERE post_id = '$id'";
    mysqli_query($con, $approve);
}

$select = "SELECT posts.*, category.category_name 
                       FROM posts 
                       JOIN category ON posts.post_category = category.id";

$ex = mysqli_query($con, $select);

?>

<h2 class="bg-secondary text-white text-center p-2">Manage Posts</h2>
<div class="col-lg-12">
    <table class="table table-bordered text-center">

        <thead class="table-dark">
            <tr>
                <th>SL</th>
                <th>Title</th>
                <th>Image</th>
                <th>Category</th>
                <th>Author</th>
                <th>Date</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>

            <?php
            
            $i = 1;
            while ($row = mysqli_fetch_array($ex)) {
                ?>

                <tr>
                    <td><?= $i ?></td>

                    <td><?= $row['post_title'] ?></td>

                    <td>
                        <img height="70px" width="80px" src="../uploads/<?= $row['post_img'] ?>">
                    </td>

                    <td><?= $row['category_name'] ?></td>

                    <td><?= $row['post_author'] ?></td>

                    <td><?= $row['post_date'] ?></td>

                    <td>
                        <?php if ($row['post_status'] == 1) { ?>
                            <span class="text-success">Published</span>
                        <?php } else { ?>
                            <span class="text-danger">Pending</span>
                        <?php } ?>
                    </td>

                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $row['post_id'] ?>">

                            <?php if ($row['post_status'] == 0) { ?>
                                <button type="submit" name="approveBtn" class="btn btn-success btn-sm">
                                    Approve
                                </button>
                            <?php } ?>

                            <button type="submit" name="deleteBtn" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

                <?php
                $i++;
            }
            ?>

        </tbody>
    </table>
</div>