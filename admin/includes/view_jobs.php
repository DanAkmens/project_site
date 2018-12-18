<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>View Vacancies
  </title>
  <style>
      th, td, tr, table {
        padding: 0px;
        margin: 0px;
      }
      th {
        border-left: 2px solid #333;
        border-bottom: 2px solid #333;
      }
      td {      
        border-left: 2px solid #333;
      }
      h2{
        padding: 2px;
      }  
  </style>
</head>
<body>
  
    <table align="center" bgcolor="#d3d3d3" width="795">
      <tr>
        <td colspan="8" align="center" bgcolor="#0099cc"><h2>View all Vacancies here</h2></td>
      </tr>
      <tr>
        <th>Job ID</th>
        <th>Job Title</th>
        <th>Salary Min</th>
        <th>Salary Max</th>
        <th>City</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <?php 
      
      include('db.php');
      
      $get_jobs = "SELECT * FROM jobs";

      $run_jobs = mysqli_query($con, $get_jobs);

      $i = 1; // for id column, for visual appearance 

      while($row_jobs = mysqli_fetch_array($run_jobs)){

          $job_id = $row_jobs['id'];
          $job_sector = $row_jobs['sector_name'];
          $job_title = $row_jobs['title'];
          $job_description = $row_jobs['description'];
          $job_salary_min = $row_jobs['salary_min'];
          $job_salary_max = $row_jobs['salary_max'];
          $job_type = $row_jobs['type'];
          $job_city = $row_jobs['city'];
      ?>

      <tr align="center">
        <td><?php echo  $i++; ?></td>
        <td><?php echo  $job_title; ?></td>        
        <td><?php echo  $job_salary_min; ?></td>
        <td><?php echo  $job_salary_max; ?></td>
        <td><?php echo  $job_city; ?></td>
        <td><a href="index.php?edit_job=<?php echo $job_id; ?>">Edit</a></td>
        <td><a href="del_job.php?del_job=<?php echo $job_id; ?>">Delete</a></td>
      </tr>

      <?php } ?>
    
    </table>

</body>
</html>