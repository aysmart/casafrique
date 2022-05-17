<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcateg = $_POST["pcateg"];
$ptags = $_POST["ptags"];
$pcontent = $_POST["pcontent"];
$pid = $_POST["pid"];
$previewText = $_POST["previewText"];

mysqli_query($con,"UPDATE blogpost SET Category='".$pcateg."', BlogTittle='".$ptitle."', ContentText='".$pcontent."', PostTags='".$ptags."', FirstPrev='".$previewText."' WHERE ID='".$pid."'");

$last_id = mysqli_affected_rows($con);

if($last_id>0){
    echo 'Update was successful.';
  }
  else{
    echo 'Update was not successful, check and try again!';
  }
?>
