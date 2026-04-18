<?php
include 'db/db.php';

if (isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];

    $delete = "DELETE from posts where post_id = '$id'";
    $ex = mysqli_query($con, $delete);

    if (!$ex) {
        echo "Failed to delete";
    }
}
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
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $select = "SELECT posts.*, category.category_name 
                               FROM posts 
                               JOIN category ON posts.post_category = category.id";

            $ex = mysqli_query($con, $select);

            $i = 1;
            while ($row = mysqli_fetch_array($ex)) {
                ?>

                <tr>
                    <td>
                        <?php echo $i; ?>
                    </td>

                    <td>
                        <?php echo $row['post_title']; ?>
                    </td>

                    <td>
                        <img height="70px" width="80px" src="../uploads/<?php echo $row['post_img']; ?>" width="80">
                    </td>

                    <td>
                        <?php echo $row['category_name']; ?>
                    </td>

                    <td>
                        <?php echo $row['post_author']; ?>
                    </td>

                    <td>
                        <?php echo $row['post_date']; ?>
                    </td>

                    <td>
                        <?php
                        if ($row['post_status'] == 1) {
                            echo "<span class='text-success'>Published</span>";
                        } else {
                            echo "<span class='text-danger'>Pending</span>";
                        }
                        ?>
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['post_id']; ?>">
                        <button type="submit" name="deleteBtn" class="btn btn-danger">Delete
                        </button>
                    </td>

                </tr>

                <?php
                $i++;
            }
            ?>

        </tbody>

    </table>

</div>