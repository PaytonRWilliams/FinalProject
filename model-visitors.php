
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

?>
