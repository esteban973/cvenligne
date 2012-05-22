<?php
if (mail('stephane.lanjard@gmail.com',$_POST['subject'],$_POST['message']." de ".$_POST['email'] )) header('location: index.php');
else header('location: contact.php');
?>
