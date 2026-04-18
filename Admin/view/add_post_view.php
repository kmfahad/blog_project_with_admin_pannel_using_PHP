<h2 class="bg-secondary text-white text-center p-2">Add Post</h2>

<?php
include 'db/db.php';

$select_cat = "SELECT * from category";
$ex_cat = mysqli_query($con, $select_cat);

if (!isset($_SESSION['email'])) {
    header("location:login.php");
}

if (isset($_POST['postBtn'])) {
    $title = $_POST['post_title'];
    $content = $_POST['post_content'];
    $summary = $_POST['post_summary'];
    $category = $_POST['post_category'];
    $author = $_SESSION['email'];
    $date = date("Y-m-d");
    $status = $_POST['post_status'];

    // Image Upload
    $img_name = $_FILES['post_img']['name'];
    $img_tmp = $_FILES['post_img']['tmp_name'];
    move_uploaded_file($img_tmp, "../uploads/" . $img_name);

    $insert = "INSERT into posts 
    (post_title, post_content, post_img, post_category, post_author, post_date, post_summary, post_status)
    values ('$title','$content','$img_name','$category','$author','$date','$summary','$status')";

    $ex = mysqli_query($con, $insert);

    if ($ex) {
        echo "Post Added Successfully";
    } else {
        echo "Failed. Try again.";
    }
}
?>


<div class="container mt-4">
    <div class="col-lg-12">

        <form method="POST" enctype="multipart/form-data">

            <table class="table table-bordered">
                <tr>
                    <th>Post Title</th>
                    <td>
                        <input type="text" name="post_title" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <th>Post Summary</th>
                    <td>
                        <input type="text" name="post_summary" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Post Content</th>
                    <td>
                        <textarea name="post_content" rows="5" class="form-control" required></textarea>
                    </td>
                </tr>
                <tr>
                    <th>Post Image</th>
                    <td>
                        <input type="file" name="post_img" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>
                        <select name="post_category" class="form-control">
                            <option value="">Select Category</option>

                            <?php
                            while ($data = mysqli_fetch_array($ex_cat)) {
                                ?>
                                <option value="<?php echo $data['id']; ?>">
                                    <?php echo $data['category_name']; ?>
                                </option>
                                <?php
                            }
                            ?>

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <select name="post_status" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">Published</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-center">
                        <button type="submit" name="postBtn" class="btn btn-success px-5">
                            Add Post
                        </button>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>

</body>

</html>