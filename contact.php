<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['contact-name'];
    $mailForm = $_REQUEST['contact-email'];
    // $subject = $_REQUEST['contact-website'];
    // $phone = $_REQUEST['contact-phone'];
    $message = $_REQUEST['contact-message'];

    $mailTo = "pranavgoswami38@gmail.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Receive New Mail.\n Name : ".$name.".\n Email : ".$mailForm. ".\n Message : ".$message;

    mail($mailTo,"New Entry Seva Kalyan Website : $name", $txt, $headers);
   //header("location:index.html");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name. " \n We Contact you soon...";
  
   
   
   mail($mailForm,"Thank you very much from Axar . ",$body,"From:noreply@patelelec.eu")

?>




<script language="javascript">
    window.open("index.html","_self");
</script>