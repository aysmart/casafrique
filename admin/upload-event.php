<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcontent = $_POST["pcontent"];
$bannerImage = $_POST["bannerImage"];
$eventdate = $_POST["eventdate"];
$timeto = $_POST["totime"];
$timefrom = $_POST["fromtime"];
$eventvenue= $_POST["eventvenue"];
//echo 'Upload was successful.';
//$query_explode=explode("/", $eventdate);
//$eventdate =$query_explode[0]."/".$query_explode[1]."/".$query_explode[2];
//$eventdate = "2020/08/9";
mysqli_query($con,"INSERT INTO eventinfo(EventTitle, EventLocation, EventDetails, BannerImage, EventDate, PostedBy, FromTime, ToTime) values('$ptitle','$eventvenue', '$pcontent','$bannerImage','$eventdate', 'Admin','$timefrom', '$timeto')");    

$last_id = mysqli_insert_id($con);

if($last_id>0){
    echo 'Upload was successful.';
  }
  else{
   echo 'Upload was not successful, check and try again!';
    // echo 'Upload was successful.';
  }
?>
