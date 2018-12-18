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
        padding: 5px;
      }
      
  </style>
</head>
<body>
  
    <table align="center" bgcolor="#CDCDCD" width="795">
      <tr>
        <td colspan="8" align="center" bgcolor="#0099cc"><h2>View all Posts</h2></td>
      </tr>
      <tr>
        <th>Post ID</th>
        <th>Post Title</th>        
        <th>Author</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>

      <?php 
      
        include('db.php');

        $get_posts = "SELECT * FROM posts";

        $run_posts = mysqli_query($con, $get_posts);

        $i = 1; // for ID column, to start loop from 1

        while($row_posts = mysqli_fetch_array($run_posts)) {

            $post_id = $row_posts['id'];
            $post_title = $row_posts['title'];
            $post_body = $row_posts['body'];
            $post_author = $row_posts['author'];
            $post_image = $row_posts['post_image'];            
       
      ?>  
      <tr align="center">
        <td><?php echo $i++; ?></td>
        <td><?php echo $post_title; ?></td>
        <td><?php echo $post_author; ?></td>
        <td> <img src="../img/<?php echo $post_image; ?>" width="50" height="50"></td>
        <td><a href="index.php?edit_post=<?php echo $post_id; ?>">Edit</a></td>
        <td><a href="del_post.php?del_post=<?php echo $post_id; ?>">Delete</a></td>
      </tr>

    <?php  } ?>

    </table>
</body>
</html>