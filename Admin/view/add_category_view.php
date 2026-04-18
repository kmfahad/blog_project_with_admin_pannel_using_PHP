<h2 class="bg-secondary text-white text-center p-2">Add Category</h2>

<?php
include 'db/db.php';

if (isset($_POST['add_category_btn'])) {
    $category_name = $_POST['category_name'];
    $category_des = $_POST['category_context'];

    $insert = "INSERT into category(category_name, category_des) values('$category_name','$category_des')";
    $ex = mysqli_query($con, $insert);

    if ($ex) {
        echo "Category added successfully";
    } else {
        echo "Failed. Try again.";
    }
} ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form method="post">
                <label for="">Write Category Name</label>
                <input type="text" name="category_name" placeholder="Write here" class="form-control"></input>

                <label for="">Category Description</label>
                <input type="text" placeholder="Write here" name="category_context" class="form-control"><br>

                <button class="btn btn-success p-2" name="add_category_btn">Add Category</button>
            </form>
        </div>
    </div>
</div>