
<?php
function selectVisitors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT visitor_id, visitor_fname, visitor_lname, visitor_age FROM `vistor`");
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
        $stmt = $conn->prepare("INSERT INTO `vistor` (`visitor_fname`, `visitor_lname`, `visitor_age`) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $vFname, $vLname, $vAge);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateVisitor($vid, $vFname, $vLname, $vAge) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `vistor` SET `visitor_id`='[value-1]',`visitor_fname`='[value-2]',`visitor_lname`='[value-3]',`visitor_age`='[value-4]' WHERE 1");
        $stmt->bind_param("issi", $vid, $vFname, $vLname, $vAge);
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
        $stmt = $conn->prepare("DELETE FROM `vistor` WHERE `vistor`.`visitor_id` = ?");
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
