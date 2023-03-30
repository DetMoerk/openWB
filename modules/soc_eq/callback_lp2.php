<?php
   //Callback procedure for mercedes SoC API LP2 
   if( $_GET["code"] ) {
      $code= escapeshellarg($_GET['code']);
      $command = escapeshellcmd("/var/www/html/openWB/modules/soc_eq/auth.py 2 " );
      system( $command  . $code);
   }
   else {
      echo "<html>";
      echo "<p>" . $_GET["error"] . "</p>";
      echo "<p>" . $_GET["error_description"] . "</p>";
      echo "</html>";
   }
?>
