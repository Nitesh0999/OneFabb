<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "nitesh.verma0999@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: nitesh.gkv@gmail.com" . "\r\n" .
"CC: nitesh_verma@s3india.com";
if($email=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:services.html");
?>
