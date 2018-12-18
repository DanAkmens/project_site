<?php 
  require('admin/includes/db.php');
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

  <body style="background-color: #ebebeb">
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
              <li class="nav-item">
                <a class="nav-link" href="index.php">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">divisions</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">contact</a>
              </li>
              <li class="nav-item current">
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

    <div container-fluid class="jobs-img" style="">
        <h1 class="display-3 text-white">Job Search.</h1>
    </div>

  <!--  -------Search-------- -->                          
    <div class=" container my-4 search search-jobs"> 
      <div class="input-group">
        <input id="Job-search-form" type="text" class="form-control bg-white" maxlength="256" placeholder="job title" aria-label="job title" aria-describedby="basic-addon">
        <input type="text" class="form-control bg-white" placeholder="location" aria-label="location" aria-describedby="basic-addon">
       <button class="btn orange" type="button"><i class="fa fa-search"></i></button>          
      </div>         
    </div> 

 <!-- Vacancies Section -->
  <div class="container jobs">
      <div class="row">
    <!--     Col-1 -->
      	<div class="col-lg-4 col-md-5 aside d-flex flex-column">
         <!--  FILTER -->
            <div class="filter d-flex flex-column py-4 mb-4 text-white">
              <div class="filter-body">
              <div class="d-flex justify-content-between align-items-center px-4 border-bottom">
                <h1>Filter</h1>
                <a href="" class="text-white"><h4><u>Reset</u></h4></a>
              </div>
       
               <div class="d-flex justify-content-between align-items-center px-4 border-bottom">
                  <span>Location</span>
                  <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle">Yorkshire </span> 
                          <span class="plus align-middle">+</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Humberside</a>
                          <a class="dropdown-item" href="#">Lincolnshire</a>
                          <a class="dropdown-item" href="#">Greater London</a>
                        </div>
                  </div>
                </div>
                <div class="filter-item d-flex justify-content-between align-items-center px-4 border-bottom">
                  <span>Sector</span>
                  <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle">Retail </span> 
                          <span class="plus align-middle">+</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Finance</a>
                          <a class="dropdown-item" href="#">IT</a>
                          <a class="dropdown-item" href="#">Manufacturing</a>
                        </div>
                  </div>
                </div>
                <div class="filter-item d-flex justify-content-between align-items-center px-4 border-bottom">
                  <span>Industry</span>
                  <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle">All </span> 
                          <span class="plus align-middle">+</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">1</a>
                          <a class="dropdown-item" href="#">2</a>
                          <a class="dropdown-item" href="#">3</a>
                        </div>
                  </div>
                </div>
                <div class="filter-item d-flex justify-content-between align-items-center px-4 border-bottom">
                  <span>Contract Type</span>
                  <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle">All</span> 
                          <span class="plus align-middle">+</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Permanent</a>
                          <a class="dropdown-item" href="#">Full-time</a>
                          <a class="dropdown-item" href="#">Part-time</a>
                        </div>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center px-4 border-bottom">
                  <span>Yearly Salary</span>
                  <div class="dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="align-middle">All </span> 
                          <span class="plus align-middle">+</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">at least £10,000</a>
                          <a class="dropdown-item" href="#">at least £15,000</a>
                          <a class="dropdown-item" href="#">at least £20,000</a>
                          <a class="dropdown-item" href="#">at least 30,000</a>
                          <a class="dropdown-item" href="#">at least £40,000</a>
                          <a class="dropdown-item" href="#">at least £50,000</a>
                        </div>
                  </div>
                </div>
              </div> <!-- /filter-body -->
            

              <div class="filter-footer pt-5 d-flex justify-content-center">
               <a href="#" class="btn btn-lg orange text-uppercase px-5">filter jobs</a>
              </div>

            </div><!-- /filter --> 

           <!--  TWITTER     -->      
            <div class="twitter py-4 mb-4 bg-white">
              <div class="d-flex justify-content-between px-4 border-bottom pb-3">
                <div>
                  <span class="h3 pr-2">Tweets</span> 
                  <span class="text-muted">by<a href="https://twitter.com/arlingtonmoore" target="_blank"><span class="pl-2 link">@arlingtonmoore</span></a></span>
                </div>
                <span class="text-black-50"><i class="fas fa-info-circle"></i></span>
              </div>
            </div>
        </div>                  
       
      <!--   col-2 -->
        <div class="col-lg-8 col-md-7">

        <?php 
        
        $get_jobs = "SELECT * 
                     FROM jobs 
                     ORDER BY rand() 
                     LIMIT 0,5"; 

				$run_jobs = mysqli_query($con, $get_jobs);				

        
        while($row_jobs = mysqli_fetch_array($run_jobs)) {

            $job_id = $row_jobs['id'];
            $job_title = $row_jobs['title'];
            $job_description = $row_jobs['description'];
            $job_salary_min = $row_jobs['salary_min'];
            $job_salary_max = $row_jobs['salary_max'];
            $job_type = $row_jobs['type'];
            $job_city = $row_jobs['city'];

            echo "

         <!------ Job----- -->

          <div class='card py-4 mb-4 blue'>
            <a href='#' target=''><h3 class='card-header link border-bottom px-5'>$job_title</h3></a>
            <div class='card-body px-5'>
                <div class='specs'>
                  <div  class='pr-4'><span><strong class='bold-text-2 pr-2'><i class='fas fa-map-marker-alt'></i></strong></span> $job_city</div>
                  <div class='pr-4'><span><strong class='bold-text-3 pr-2'><i class='fas fa-clock'></i></strong></span>$job_type</div>
                  <div class='pr-4'><span><strong class='bold-text-4 pr-2'><i class='fas fa-money-bill'></i></strong></span> £$job_salary_min</div>
                </div>          
				        <p>$job_description</p>			
            </div>
            <div class='card-footer px-5'>
              <a href='#' class='btn btn-lg'>Read More</a>
            </div>
          </div> 

          ";
        }      
    
        ?>
        

          <!------ Show More----- -->             
          <div class="show-more mb-4 bg-white text-center p-4">
            <a href="" class="blue"><i class="fas fa-arrow-circle-down"></i>
            <p class="h4 blue font-weight-bold pt-3">Show More</p></a>
          </div>

          <!-- Upload CV -->
          <div class="bg-white uploadcv-jobs mb-4 py-4 px-5 lightblue">
            <span class="h4 font-weight-bold">Didn&#x27;t find the right job for you?</span>
            <span class="h2"><a href="" class="link"><span><strong>Upload CV <i class="fas fa-cloud-upload-alt"></i></strong></span></a></span>
            
          </div>
        </div><!-- /column -->
      </div><!-- /.row -->
    </div> <!-- container jobs -->                    
  </div>                           
</body>
 
 

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
