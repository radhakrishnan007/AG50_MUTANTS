<?php
function notify( $type, $forUser, $entityID ){   
	 $con = new mysqli( 'localhost:3308', 'root', '', 'smfr_db'); 
      $sql = "SELECT `msgid` FROM `notification` WHERE `forUser`='" . $forUser .  
   $result = $con->query( $sql );    
    // if query returned a row, it means the notification exists 
   if( $result->num_rows > 0 ){     
// update the existing record, set read to false and time to the current time 
    $sql = "UPDATE `notification` SET `read`=0, `time`=NOW() WHERE `forUser`='" . $forUser . ;     $con->query( $sql );    }    else{    // insert new record with the details    $sql = "INSERT INTO `notification`( `type`, `forUser` ) VALUES( '" . $type . "','" . $forUser . "'  );";    
 $con->query( $sql );    
} 
  $con->close();  } 
