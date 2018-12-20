<?php
require("db.php");
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Insert vacancy</title>
  <script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
  <script>
    tinymce.init({selector:'textarea'});
</script>

  <style type="text/css">
    td,
    tr {
      padding: 0px;
      margin: 0px;
    }
  </style>
  <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="admin_style.css"/>
</head>

<body class="container">
  <form action="insert_job.php" method="POST" enctype="multipart/form-data">

    <table class="my-5 border">

      <tr class="blue text-white">
        <td colspan="6" align="center" class="py-3">
          <h1>Insert New Vacancy:</h1>
        </td>
      </tr>
           <tr>
        <td align="right" class="blue text-white p-2"><strong> Sector:</strong></td>
        <td>
          <select name="sector_name">
            <option value="null">Select Industry</option>
            <?php 

	   include("db.php");
	  
	   $get_sect = "SELECT * FROM sectors";
	  
	   $run_sect = mysqli_query($con, $get_sect);
	  
	   while ($sect_row=mysqli_fetch_array($run_sect)){
		  
		    $sect_id=$sect_row['id']; 
	      $sect_title=$sect_row['name'];
		  
		    echo "<option value='$sect_id'>$sect_title</option>";
	   }	  
	  
	  ?>
          </select>

        </td>
      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong>Title:</strong></td>
        <td><input type="text" name="title" size="60" /></td>
      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong bgcolor="#FF6600">Description:</strong></td>
        <td><textarea name="description" rows="15" cols="40"></textarea></td>
      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong>Salary Min:</strong></td>
        <td><input type="number" name="salary_min" size="50" /></td>
      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong>Salary Max:</strong></td>
        <td><input type="number" name="salary_max" size="50" /></td>
      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong>Type of employment:</strong></td>

        <td> 
          <select name="type">
              <option value="full-time">Full-time</option>
              <option value="part-time">Part-time</option>
          </select> 
        </td>

      </tr>

      <tr>
        <td align="right" class="blue text-white p-2"><strong>City:</strong></td>
        <td><input type="text" name="city" size="60" /></td>
      </tr>

      <tr class="blue">
        <td colspan="6" align="center" class="py-3"><button type="submit" name="submit" value="Publish Now" class="btn-lg btn-primary orange p-3">Publish Now</button></td>
      </tr>

    </table>

  </form>

</body>

</html>

<?php 
if(isset($_POST['submit'])){
	
	 $job_sector = $_POST['sector_name'];	 
	 $job_title = $_POST['title'];
	 $job_description = $_POST['description'];
   $job_salary_min = $_POST['salary_min'];	 
   $job_salary_max = $_POST['salary_max'];	
   $job_type = $_POST['type'];
   $job_city = $_POST['city'];
	
	if($job_sector == 'null' OR $job_title  == '' OR $job_description == '' OR $job_salary_min == '' OR $job_type == 'null' OR $job_city == '' ){
		
		echo "<script>alert('Please fill in all the fileds')</script>";
		exit();
		}
	else {
		
		// move_uploaded_file($post_image_tmp,"news_images/$post_image");
		
		$insert_vacancy = "INSERT INTO jobs (sector_name,title,description,salary_min,salary_max,type,city) values ('$job_sector','$job_title','$job_description','$job_salary_min','$job_salary_max','$job_type','$job_city')";
		
		$run_posts = mysqli_query($con, $insert_vacancy); 		
		
			
			echo "<script>alert('Vacancy Has been Published!')</script>";
			
			echo "<script>window.open('insert_job.php','_self')</script>";		
		}	
	}
?>



