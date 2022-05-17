<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcontent = $_POST["pcontent"];
$eventdate = $_POST["eventdate"];
$timeto = $_POST["totime"];
$timefrom = $_POST["fromtime"];
$eventvenue= $_POST["eventvenue"];
$ppid=$_POST["ppid"];

mysqli_query($con,"UPDATE eventinfo SET EventTitle='".$ptitle."', EventLocation='".$eventvenue."', EventDetails='".$pcontent."', EventDate='".$eventdate."', FromTime='".$timefrom."', ToTime='".$timeto."' WHERE ID='".$ppid."'");

$last_id = mysqli_affected_rows($con);

if($last_id>0){
    echo 'Update was successful.';
  }
  else{
    echo 'Update was not successful, check and try again!';
  }
?>
