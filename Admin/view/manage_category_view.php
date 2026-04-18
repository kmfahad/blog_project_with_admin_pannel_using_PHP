<?php
include 'db/db.php';

if (isset($_POST['deleteBtn'])) {
    $id = $_POST['id'];

    $delete = "DELETE from category where id = '$id'";
    $ex = mysqli_query($con, $delete);

    if ($ex) {

    } else {
        echo "Failed to delete";
    }
}
?>


<h2 class="bg-secondary text-white text-center p-2">Manage Category</h2>


<div class="col-lg-12">
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>SL</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Delete</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $select = "SELECT * FROM category";
            $ex = mysqli_query($con, $select);

            $i = 1;
            while ($row = mysqli_fetch_array($ex)) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['category_des']; ?></td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="deleteBtn" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>
