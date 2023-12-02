
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

?>
