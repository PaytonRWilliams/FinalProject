
<?php
function selectVisitors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT visitor_id, visitor_fname, visitor_lname, visitor_age FROM `visitor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertVisitor($vFname, $vLname, $vAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `visitor` (`visitor_fname`, `visitor_lname`, `visitor_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $vFname, $vLname, $vAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateVisitor($vFname, $vLname, $vAge, $vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `visitor` SET `visitor_fname`=?, `visitor_lname`=?, `visitor_age`=? WHERE `visitor_id`=?");
        $stmt->bind_param("ssii", $vFname, $vLname, $vAge, $vid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteVisitor($vid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `visitor` WHERE `visitor`.`visitor_id` = ?");
        $stmt->bind_param("i", $vid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
