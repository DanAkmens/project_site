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
</head>

<body>
  <form action="insert_post.php" method="POST" enctype="multipart/form-data">

    <table width="795" align="center" bgcolor="#FFFFFF">

      <tr bgcolor="#FF6600">
        <td colspan="6" align="center">
          <h1>Insert New Post:</h1>
        </td>
      </tr>

      <tr>
        <td align="right" bgcolor="#FF6600"><strong>Title:</strong></td>
        <td><input type="text" name="title" size="60" /></td>
      </tr>

      <tr>
        <td align="right" bgcolor="#FF6600"><strong>Post Image:</strong></td>
        <td><input type="file" name="post_image" size="50"/></td>
      </tr>

      <tr>
        <td align="right" bgcolor="#FF6600"><strong bgcolor="#FF6600">Description:</strong></td>
        <td><textarea name="description" rows="15" cols="40"></textarea></td>
      </tr>

      <tr>
        <td align="right" bgcolor="#FF6600"><strong>Post Author:</strong></td>
        <td><input type="text" name="author" size="60"/></td>
      </tr>

      <tr bgcolor="#FF6600">
        <td colspan="6" align="center"><input type="submit" name="submit" value="Publish Now" /></td>
      </tr>

    </table>

  </form>

</body>

</html>

<?php 
if(isset($_POST['submit'])){
	
   $post_title = $_POST['title'];
   $post_image = $_FILES['post_image']['name'];
	 $post_image_tmp = $_FILES['post_image']['tmp_name'];
	 $post_description = $_POST['description'];		 
   $post_author = $_POST['author'];
  
	
	if($post_title  == '' OR $post_image  == '' OR $post_description == '' OR $post_author == ''){
		
		echo "<script>alert('Please fill in all the fileds')</script>";
		exit();
		}
	else {
		
		move_uploaded_file($post_image_tmp,"../img/$post_image");
		
		$insert_post = "INSERT INTO posts (title,body,author,post_image) values ('$post_title','$post_description','$post_author','$post_image')";
		
		$run_posts = mysqli_query($con, $insert_post); 		
		
			
			echo "<script>alert('Post Has been Published!')</script>";
			
			echo "<script>window.open('insert_post.php','_self')</script>";
		
		}
	
	}
?>



