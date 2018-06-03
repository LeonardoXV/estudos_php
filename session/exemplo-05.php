<?php

 require_once("config.php");
 
 echo session_save_path();
 echo "<br>";
 var_dump(session_status());

 echo "<br>";

 switch(session_status()){
     case 0:
     echo "PHP_SESSION_DISABLED";
     break;
     case 1:
     echo "PHP_SESSION_NONE";
     break;
     case 2:
     echo "PHP_SESSION_ACTIVE";
     break;
 }
?>