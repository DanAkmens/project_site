<?php 
  require('db.php');


  if(isset($_GET['del_post'])){

      $delete_id = $_GET['del_post'];
      $delete_post = "DELETE FROM posts
                      WHERE id = '$delete_id'";
      $run_delete = mysqli_query($con, $delete_post);               

      echo "<script>alert('Your post has been deleted')</script>";
      echo "<script>window.open('index.php?view_posts','_self')</script>";
  }

?>