<?php
include('includes/config.php');
$ptitle = $_POST["ptitle"];
$pcontent = $_POST["pcontent"];
$psource = $_POST["psource"];
$pdate = $_POST["pdate"];
$purl = $_POST["purl"];
$ppid=$_POST["ppid"];

mysqli_query($con,"UPDATE mediamention SET title='".$ptitle."', source='".$psource."', postUrl='".$purl."', postdate='".$pdate."', synopsis='".$pcontent."' WHERE id='".$ppid."'");

$last_id = mysqli_affected_rows($con);

if($last_id>0){
    echo 'Update was successful.';
  }
  else{
    echo 'Update was not successful, check and try again!';
  }
?>
