<?php 
require('admin/includes/db.php');

// creates query
$query = "SELECT * FROM posts 
          ORDER BY rand() 
          LIMIT 0,3";

// Get result
$result = mysqli_query($con, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);


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
      <nav class="navbar fixed-top navbar-expand-xl navbar-white bg-white" id="navbar">
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
              <li class="nav-item">
                <a class="nav-link" href="jobs.php">vacancies</a>
              </li>
              <li class="nav-item current">
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
    <div class="container blog-page pt-3">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="display-4 mt-4 mb-3 blue">Our Latest
        <small class="lightblue">Blog Posts</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html" class="lightblue">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Home 1</li>
      </ol>

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
        
          <!-- Blog Post -->
        <?php foreach($posts as $post) : ?>	
          <div class="card mb-4">
            <img class="card-img-top blog-page-img" src="admin/img/<?php echo $post['post_image']; ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title lightblue font-weight-bold"><?php echo $post['title']; ?></h2>
              <p class="card-text"><?php echo $post['body']; ?></p>
              <div>
              <a href="#" class="btn btn-lg orange">Read More &rarr;</a>
            </div>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
              <a href="#" class="link">&nbspArlington Moore</a>
            </div>
          </div>
          <?php endforeach; ?>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Web Design</a>
                    </li>
                    <li>
                      <a href="#">HTML</a>
                    </li>
                    <li>
                      <a href="#">Freebies</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">CSS</a>
                    </li>
                    <li>
                      <a href="#">Tutorials</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

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

   <script src="js/scripts.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>