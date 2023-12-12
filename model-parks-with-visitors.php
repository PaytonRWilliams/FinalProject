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

function selectVisitorsByPark($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT v.visitor_id, visitor_name, visitor_age, visit_id, t.park_id FROM `visitor` v join visit t on t.visitor_id = v.visitor_id where t.park_id=?");
        $stmt->bind_param("i", $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectParksForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT park_id, park_name FROM `park` order by park_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectVisitorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT visitor_id, visitor_fname, visitor_lname FROM `visitor` order by visitor_fname");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertVisit($pid, $vid, $sem, $date) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `visit` (`park_id`, `visitor_id`, `visit_date`) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $iid, $cid, $date);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateVisit($pid, $vid, $date, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `visit` set `park_id` = ?, `visitor_id` = ?, `visit_date` = ? where visit_id = ?");
        $stmt->bind_param("iisi", $pid, $vid, $date, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteVisit($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from visit where visit_id=?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
