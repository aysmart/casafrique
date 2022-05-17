<?php
include("includes/config.php");

$post_id=$_POST['post_id'];

mysqli_query($con,"DELETE FROM blogpost WHERE ID='".$post_id."'");

$last_id = mysqli_affected_rows($con);

if($last_id>0){
    echo 'Post Deleted successfully.';
  }
  else{
    echo 'Delete was not successful, check and try again!';
  }


?>