<?php
include('../includes/config.php');

$Fname = $_POST["hfFName"];
$Lname = $_POST["hfLName"];
$email = $_POST["hfEmail"];
$phone = $_POST["hfPhone"];
$State = $_POST["hfState"];
$Nation = $_POST["hfNation"];

$query=mysqli_query($con,"SELECT * FROM users WHERE uEmail='".$email."'"); 
$numrow=mysqli_num_rows($query);

if ($numrow>0)
{

}
else
{
    mysqli_query($con,"INSERT INTO users(fName, lName, uEmail, uPhone, 	uState, uNation) values('$Fname','$Lname','$email', '$phone','$State','$Nation')");    

    $last_id = mysqli_insert_id($con); 
}
 
// redirect to success page
if ($numrow>0){
    echo "registered";
 }elseif ($last_id){
   echo "success";
}else{
    echo "invalid";
}
 
?>