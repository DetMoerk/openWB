<?php
   //Callback procedure for mercedes SoC API LP1 
   if( $_GET["code"] ) {
      $state= escapeshellarg($_GET['state']);
      $code= escapeshellarg($_GET['code']);
      $command = escapeshellcmd("/var/www/html/openWB/modules/soc_eq/auth.py " );
      //system( "/var/www/html/openWB/modules/soc_eq/auth.py " . $_GET['state'] . " " . $_GET['code']) ;
      system( $command . $state . " " . $code);

   }
   else {
      echo "<html>";
      echo "<p>" . $_GET["error"] . "</p>";
      echo "<p>" . $_GET["error_description"] . "</p>";
      echo "</html>";
   }
?>
