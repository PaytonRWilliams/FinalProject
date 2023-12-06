
<?php



function selectParks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT park_id, park_name, park_state FROM `park`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}





function insertPark($Pname, $Pstate) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `park` (`park_name`, `park_state`) VALUES (?, ?)");
        $stmt->bind_param("ss", $Pname, $Pstate);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePark($Pname, $Pstate, $Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `park` SET `park_name`=?, `park_state`=? WHERE `park_id`=?");
        $stmt->bind_param("ssi", $Pname, $Pstate, $Pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletePark($Pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `park` WHERE `park`.`park_id` = ?");
        $stmt->bind_param("i", $Pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}







?>
