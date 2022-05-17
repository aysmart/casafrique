<?php
include('../includes/config.php');

$name = $_POST["cfName"];
$email = $_POST["cfEmail"];
$subject = $_POST["cfSubject"];
$message = $_POST["cfMessage"];
 
mysqli_query($con,"INSERT INTO messages(cName, cEmail, cSubject, cMessage) values('$name','$email','$subject', '$message')");    

$last_id = mysqli_insert_id($con); 

//$EmailTo = "moradxd@gmail.com";
//$Subject = "Bright - Startup Landing Page";
 
// prepare email body text
//$Body = "Name: ";
//$Body .= $name;
//$Body .= "\n";
// 
//$Body .= "Email: ";
//$Body .= $email;
//$Body .= "\n";
 
//$Body .= "Website: ";
//$Body .= $website;
//$Body .= "\n";
 
//$Body .= "Subject: ";
//$Body .= $subject;
//$Body .= "\n";
 
//$Body .= "Message: ";
//$Body .= $message;
//$Body .= "\n";
 
// send email
//$success = mail($EmailTo, $Subject, $Body, "From:".$email);
 
// redirect to success page
if ($last_id){
   echo "success";
}else{
    echo "invalid";
}
 
?>