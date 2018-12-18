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

      if(isset($_GET['edit_post'])){

          $edit_id = $_GET['edit_post'];

          $select_post = "SELECT * 
                          FROM posts
                          WHERE id = '$edit_id'";

         $run_query =  mysqli_query($con, $select_post);
         
         while($row_post = mysqli_fetch_array($run_query)) {

              $post_id = $row_post['id'];          
              $post_title = $row_post['title']; 
              $post_description = $row_post['body']; 
              $post_author = $row_post['author'];
              $post_image = $row_post['post_image']; 

              // to remove " from post_image 
              $trimed_post_image =  preg_replace('/(^[\"\']|[\"\']$)/', '', $post_image);           
              
              
         }

      }

      ?>
  
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    
        <table width="795" align="center" border="2">

            <tr bgcolor="#d3d3d3">
                <td colspan="6" align="center"><h1>Edit Post:</h1></td>            
            </tr>
            <tr class="main">
                <td align="right" bgcolor="#d3d3d3" ><strong>Post Title:</strong></td> 
                <td><input type="text" name="post_title" size="50" value="<?php echo $post_title; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Post Author:</strong></td> 
                <td><input type="text" name="post_author" size="50" value="<?php echo $post_author; ?>"></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Post Image:</strong></td> 
                <td><input type="file" name="post_image" size="50" ><img src="../includes/blog_img/<?php echo $trimed_post_image; ?>" width=60 height=60></td>           
            </tr>
            <tr>
                <td align="right" bgcolor="#d3d3d3"><strong>Post Content:</strong></td> 
                <td><textarea name="post_content" cols="50" rows="15"><?php echo $post_description; ?></textarea></td>           
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

     $update_id = $post_id; 
     
     $post_title = mysqli_real_escape_string($con, $_POST['post_title']);
     $post_author = mysqli_real_escape_string($con, $_POST['post_author']);
     $post_image = mysqli_real_escape_string($con, $_FILES['post_image']['name']);
     $post_image_tmp = mysqli_real_escape_string($con, $_FILES['post_image']['tmp_name']);
     $post_content = mysqli_real_escape_string($con, $_POST['post_content']);

     if($post_title=='' OR  $post_author==''){
		
		echo "<script>alert('Please fill in all the fileds')</script>";
		exit();
		}
	else {    
       
       move_uploaded_file($post_image_tmp, "../img/$post_image"); 

       $update_posts = "UPDATE posts SET                            
                        title = '$post_title', body = '$post_content', author = '$post_author',
                        post_image = '$post_image'
                        WHERE id = $update_id";

       $run_update = mysqli_query($con, $update_posts);        

       echo "<script>alert('Post has been published')</script>";          

  }

}
?>
