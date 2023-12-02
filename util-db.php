<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'paytonra_finalprojectuser', 'PaytonandLanna', 'paytonra_finialproject');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
