<?php


if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
  
  	
  	$to = "sangeetdeveloper9878@gmail.com";

    $txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message . "\r\n Phone =" . $phone . "\r\n Subject =" . $subject;
    $headers = 'From:'. $email;
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.php");
  
}



?>