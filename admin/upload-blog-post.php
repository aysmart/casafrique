<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcateg = $_POST["pcateg"];
$ptags = $_POST["ptags"];
$pcontent = $_POST["pcontent"];
$bannerImage = $_POST["bannerImage"];
$previewText = $_POST["previewText"];

$previewText= str_replace("'","\'", $previewText);
$pcontent=str_replace("'","\'", $pcontent);

mysqli_query($con,"INSERT INTO blogpost(Category, BlogTittle, PostedBy, ContentText, PostBanner, PostTags, FirstPrev) values('$pcateg','$ptitle','Marketing Admin', '$pcontent','$bannerImage','$ptags','$previewText')");    
$last_id = mysqli_insert_id($con);

if($last_id>0){
    echo 'Upload was successful.';
  }
  else{
    echo 'Upload was not successful, check and try again!';
    echo mysqli_error()."123  ".$previewText;
  }
?>
