<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcontent = $_POST["pcontent"];
$psource = $_POST["psource"];
$pdate = $_POST["pdate"];
$purl = $_POST["purl"];
//echo 'Upload was successful.';
//$query_explode=explode("/", $eventdate);
//$eventdate =$query_explode[0]."/".$query_explode[1]."/".$query_explode[2];
//$eventdate = "2020/08/9";
mysqli_query($con,"INSERT INTO mediamention(title, source, postUrl, postdate, synopsis, PostedBy) values('$ptitle','$psource', '$purl','$pdate','$pcontent', 'Admin')");    

$last_id = mysqli_insert_id($con);

if($last_id>0){
    echo 'Upload was successful.';
  }
  else{
   echo 'Upload was not successful, check and try again!';
    // echo 'Upload was successful.';
  }
?>
