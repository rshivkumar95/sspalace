<?php


     $name=$_POST['name'];
     $email=$_POST['email'];
     $rtype=$_POST['rtype'];
$contact=$_POST['contact'];
$message="Name: ".$name.", Contact: ".$contact.", Arrival Time :".$_POST['dpd1'].", Departure Time :".$_POST['dpd2'].", Rooms : ".$_POST["rooms"].", Adult :".$_POST['adult'].", Children :".$_POST['children'].", Room Type :".$rtype;

        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent from website"; 
        mail("hotelsspalace@gmail.com", "New Booking Request From Website", $message, $from); 
        
         
        
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Thank You ! Your Request Has Been Sent !')
    window.location.href='http://hotelsspalace.com';
    </SCRIPT>");

?>
