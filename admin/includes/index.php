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
<title>Untitled Document</title>
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="admin_style.css"/>
</head>

<body>

<div class="wrapper">
	
   <a href="index.php"> <div class="header"></div></a>

	 <!-- Nav Bar on the Admin page -->
	
    <div class="left">
    	<h3 style="padding:5px;">Manage Vacancies</h3>
        
        <a href="index.php?insert_job">Post A Job</a>
         <a href="index.php?view_jobs">View all Jobs</a> 

					<h3 style="padding:5px;">Manage Posts</h3>

						<a href="index.php?insert_post">Insert New Post</a>
             <a href="index.php?view_posts">View all Posts</a>

          
             <a href="logout.php">Admin Logout</a>
    
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

