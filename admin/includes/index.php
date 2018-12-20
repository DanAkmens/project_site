<?php 
// session_start(); 

// if(!isset($_SESSION['user_name'])){
	
// 	echo "<script>window.open('login.php?not_authorize=You are not Authorize to access!','_self')</script>";
// 	}

// else {

?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Manage Vacancies</title>

<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/admin_style.css"/>
</head>

<body>
<div class="container">
	
   <a href="index.php"> <div class="header"></div></a>

	 <!-- Nav Bar on the Admin page -->
	
    <div class="card">
    	<h3 class="display-4 font-weight-bold py-5">Manage Vacancies</h3>
        	<a href="index.php?insert_job" class="btn-lg p-3 btn-primary blue mb-4">Post new job</a>
         	<a href="index.php?view_jobs" class="btn-lg btn-primary blue p-3 mb-4">View all jobs</a> 
	</div>
	<div class="card border-top">
			<h3 class="display-4 font-weight-bold py-5">Manage Blog Posts</h3>
			<a href="index.php?insert_post" class="btn-lg p-3 btn-primary blue mb-4">New blog post</a>
             <a href="index.php?view_posts" class="btn-lg p-3 btn-primary blue mb-4">View all posts</a>
	</div>
     <div class="mt-4 card">
             <a href="logout.php"class="btn-lg btn-primary orange p-3 mb-4">Logout</a>
         </div>
    
    <!-- End of Nav Bar on the Admin page -->
    
    </div>
    
    <div class="right">    
   
  <?php 
		if(isset($_GET['insert_job'])){
		
		include("insert_job.php");
		
		}
		if(isset($_GET['view_jobs'])){
		
		include("view_jobs.php");
		
		}
		
		if(isset($_GET['edit_job'])){
		
		include("edit_job.php");
		
		}

		if(isset($_GET['del_job'])){
		
			include("del_job.php");
			
			}	
		
		if(isset($_GET['insert_post'])){
		
		include("insert_post.php");
		
		}	
		
		if(isset($_GET['view_posts'])){
		
		include("view_posts.php");
		
		}	
		
		if(isset($_GET['del_post'])){
		
		include("del_post.php");
		
		}	
		
		if(isset($_GET['edit_post'])){
		
		include("edit_post.php");
		
		}	
?>     

</div>
</body>
</html>

