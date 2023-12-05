
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
        
        // Update the SQL query with correct placeholders
        $stmt = $conn->prepare("UPDATE `visitor` SET `visitor_fname`=?, `visitor_lname`=?, `visitor_age`=? WHERE `visitor_id`=?");

        // Bind parameters
        $stmt->bind_param("ssii", $vFname, $vLname, $vAge, $vid);

        // Execute the statement
        $success = $stmt->execute();

        // Close the connection
        $conn->close();

        return $success;
    } catch (Exception $e) {
        // Close the connection in case of an exception
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
