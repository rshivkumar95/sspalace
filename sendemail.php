<?php


     $name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent from website"; 
        mail("hotelsspalace@gmail.com", $subject, $message, $from); 
        
        

         echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You ! We will get back to you soon !')
    window.location.href='http://hotelsspalace.com';
    </SCRIPT>");

?>
