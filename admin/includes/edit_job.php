<?php require('db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Edit Post</title>
  <script text="text/javascript" src="../tinymce/js/jQuery.min.js"></script>
  <script text="text/javascript" src="../tinymce/plugin/js/tinymce/tinymce.min.js"></script>
  <script text="text/javascript" src="../tinymce/plugin/js/tinymce/init-tinymce.js"></script>
  <style type="text/css">
      tr, td {
          padding: 0px;
          margin: 0px;
      }
  
  </style>
</head>
<body> 

      <?php 
      require('db.php');

      if(isset($_GET['edit_job'])){

          $edit_id = $_GET['edit_job'];

          $select_job = "SELECT * 
                          FROM jobs
                          WHERE id = '$edit_id'";

         $run_query =  mysqli_query($con, $select_job);
         
         while($row_job = mysqli_fetch_array($run_query)) {

              $job_id = $row_job['id'];          
              $job_title = $row_job['title']; 
              $job_description = $row_job['description']; 
              $job_salary_min = $row_job['salary_min'];
              $job_salary_max = $row_job['salary_max'];
              $job_city = $row_job['city']; 
                        
         }

      }

      ?>
  
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    
        <table width="795" align="center" border="2">

            <tr bgcolor="#d3d3d3">
                <td colspan="6" align="center"><h1>Edit Vacancy:</h1></td>            
            </tr>
            <tr class="main">
                <td align="right" bgcolor="#d3d3d3" ><strong>Edit Title:</strong></td> 
                <td><input type="text" name="edit_title" size="50" value="<?php echo $job_title; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Edit Salary Min:</strong></td> 
                <td><input type="text" name="edit_salary_min" size="50" value="<?php echo $job_salary_min; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Edit Salary Max:</strong></td> 
                <td><input type="text" name="edit_salary_max" size="50" value="<?php echo $job_salary_max; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Edit City:</strong></td> 
                <td><input type="text" name="edit_city" size="50" value="<?php echo$job_city; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Edit Job Description:</strong></td> 
                <td><textarea name="edit_description" cols="50" rows="15"><?php echo $job_description; ?></textarea></td>           
            </tr>
            <tr bgcolor="#d3d3d3">
                <td  colspan="6" align="center" ><button type="submit" name="update">Update Now</button></td>
            </tr>
        
        
        </table>   
    
    </form>

</body>
</html>

<?php 

if(isset($_POST['update'])) {

     $update_id = $job_id; 
     
     $job_title = mysqli_real_escape_string($con, $_POST['edit_title']);
     $job_city = mysqli_real_escape_string($con, $_POST['edit_city']);
     $job_salary_min = mysqli_real_escape_string($con, $_POST['edit_salary_min']);  
     $job_salary_max = mysqli_real_escape_string($con, $_POST['edit_salary_max']);
     $job_description = mysqli_real_escape_string($con, $_POST['edit_description']);

     if($job_title=='' OR  $job_description==''){
		
		echo "<script>alert('Please fill in all the fileds')</script>";
		exit();
		}
	else {    
       
      $update_jobs = "UPDATE jobs SET                            
                       title = '$job_title', description = '$job_description', salary_min = '$job_salary_min',
                       salary_max = '$job_salary_max', city = '$job_city'
                       WHERE id = $update_id";

      $run_update = mysqli_query($con, $update_jobs);        

      echo "<script>alert('Vacancy has been published')</script>";          

  }

}
?>
