<!-- Admin_dashboard: /admin/
Admin_login email: admin@gmail.com
Admin login pass: admin@1 -->


<?php
include_once('includes/head.php');

?>

<body>

  <?php
  include_once('includes/preloader.php');
  include_once('includes/header.php');
  include_once('includes/banner.php');
  ?>



  <!-- Page Content -->

  <section class="blog-posts">
    <div class="container">
      <div class="row">
        <?php
        include_once('includes/blogpost.php');
        include_once('includes/sidebar_blog.php');

        ?>

      </div>
    </div>
  </section>

  <?php
  include_once('includes/footer.php');
  include_once('includes/script.php');
  ?>