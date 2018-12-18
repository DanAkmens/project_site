<?php  
  require('db.php');

  if(isset($_GET['del_job'])){

      $delete_id = $_GET['del_job'];
      $delete_job = "DELETE FROM jobs
                      WHERE id = '$delete_id'";
      $run_delete = mysqli_query($con, $delete_job);               

      echo "<script>alert('Your vacancy has been deleted')</script>";
      echo "<script>window.open('index.php?view_jobs','_self')</script>";
  }

?>