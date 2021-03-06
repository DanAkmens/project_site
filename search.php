<?php 
require('admin/includes/db.php');

// close connection
// mysqli_close($conn); # will stop passing data to featured jobs down the road!! 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link href="images/Favicon-arlington-moore.jpg" rel="shortcut icon" type="image/x-icon">  
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <title>Arlington Moore</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/moore.css" rel="stylesheet">

  </head>

  <body>
    <header> 
      <!-- Navigation -->
      <nav class="navbar fixed-top navbar-expand-xl navbar-white bg-white">
        <div class="container-fluid">
          <a href="index.php"><img class="logo" alt="Arlington Moore Logo" src="images/arlington-logo2.jpg"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">        	
            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
              <li class="nav-item current">
                <a class="nav-link" href="index.php">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">divisions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">vacancies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="advice.php">advice</a>
              </li>
              <li class="nav-item">
                <a class="nav-link upload link" href="uploadcv.php">Upload CV <i class="fas fa-cloud-upload-alt"></i></a>
              </li>            
            </ul>
          </div>
        </div>
      </nav>
    </header>


<!-- Page Content -->
    <section class='slider'>
  <!--  Slider -->
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
          <div class="carousel-inner" role="listbox">
                <!-- Slide One -->
              <div class="carousel-item active" style="background-image: url('images/hand4.jpg')"></div>           
              <!-- Slide Two -->
              <div class="carousel-item slide-2" style="background-image: url('images/robotarm4.jpg')"></div>
              <!-- Slide Three -->
              <div class="carousel-item" style="background-image: url('images/warehouse4.jpg')"></div>
              <!-- Slide Four -->
              <div class="carousel-item slide-4" style="background-image: url('images/woman4.jpg')" ></div>
          </div>
               

  <!--  -------Search-------- -->
          <div class="container search-container">
              <div class="row justify-content-end">             
                  <div class="text-white intro-p col-lg-6 py-5"><span>50 </span>years of combined experience in permanent recruitment and advertising campaigns throughout the UK specializing in Manufacturing, Engineering, Supply Chain, Logistics, IT, HR, Sales, Marketing, General Office and Retail</div>
              </div>             
              <div class="search">
              <form action="search.php" method="post"> 
                <div class="input-group">
                  <input name="search" type="text" class="form-control bg-white"  maxlength="256" placeholder="job title" aria-label="job title" aria-describedby="basic-addon">
                  <input type="text" class="form-control bg-white" placeholder="location" aria-label="location" aria-describedby="basic-addon">         
                  <button name="submit" class="btn orange" type="button"><i class="fa fa-search"></i></button>           
                </div>
              </form>         
              </div> 
          </div>
      </div> 
    </section>
   
    <?php

                if(isset($_POST['submit'])){
                    $search = $_POST['job_title'];
                    
                    $query = "SELECT * FROM jobs 
                    WHERE title LIKE '%$search%'";
                    $search_query = mysqli_query($con, $query);

                    if(!$search_query) {
                      die("Query Failed" . mysqli_error($con));
                    }
                    $number = mysqli_num_rows($search_query);
                    if($number === 0) {
                      echo "<h1>Can't find Result</h1>";
                    } else {

                      // $get_jobs = "SELECT * 
                      // FROM jobs 
                      // ORDER BY rand() 
                      // LIMIT 0,5"; 
 
                      // $run_jobs = mysqli_query($con, $get_jobs);				 
         
                      while($row_jobs = mysqli_fetch_array($search_query)) {
 
                      $job_id = $row_jobs['id'];
                      $job_title = $row_jobs['title'];
                      $job_description = $row_jobs['description'];
                      $job_salary_min = $row_jobs['salary_min'];
                      $job_salary_max = $row_jobs['salary_max'];
                      $job_city = $row_jobs['city'];
 
                        echo "
 
         <div class='col-lg-4 col-md-6'>
           <div class='card h-100'>
             <a href='jobs.php?jobs=$job_id' target=''><h3 class='card-header link'> $job_title </h3></a>
             <div class='card-body'>             
               $job_description
               <div class='city d-flex pt-4'>
                 <p class='h4'>$job_city</p>
                 <p class='h4'>&pound;$job_salary_min</p>                 
               </div>
             </div>
             <div class='card-footer'>
               <a href='jobs.php?jobs=$job_id' class='btn btn-lg'>Read More</a>
             </div>
           </div>
         </div>     
 
           ";
         }      

                    }
                  }

                ?>

 <!-- Vacancies Section -->
  <div class="container">
      <div class="row py-4">
      	<div class="col-lg-4 col-md-6">
          <div class="card h-100 px-3">          		                  
				<h4 class="display-4 lightblue">Our Latest</h4>
	      		<h4 class="display-4 blue">Featured Jobs</h4>
          </div>
        </div> 
<!------ Job 1----- -->

      
       </div> <!-- /.row -->
    </div> <!-- container vacancies  -->          
 

    <!-- Footer -->
   
    <footer class=" container-fluid text-white text-center">
		  	<ul class="inline">
		  		<li><a href="https://twitter.com/arlingtonmoore" target="_blank"><i class="fab fa-twitter"></i></a></li>
		  		<li><a href="https://www.facebook.com/arlingtonmoore/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
		  		<li><a href="https://www.linkedin.com/company/arlington-moore-search-&-selection/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
		  	</ul>

		  	<blockquote class="h5 m-2">&ldquo;Great vision without great people is irrelevant.&rdquo;&mdash;Jim Collins, Good to Great</blockquote>

			<p class="mt-3">&copy;Arlington Moore Ltd <script>document.write(new Date().getFullYear());</script></p> 
	</footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
