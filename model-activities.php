
<?php
function selectActivities() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT activity_id, activity_name, activity_type, activity_cost FROM `activity`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertActivity($aName, $aType, $aCost) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `activity` (`activity_name`, `activity_type`, `activity_cost`) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $aName, $aType, $aCost);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateActivity($aName, $aType, $aCost, $aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("UPDATE `activity` SET `activity_name`=?, `activity_type`=?, `activity_cost`=? WHERE `activity_id`=?");
        $stmt->bind_param("sssi", $aName, $aType, $aCost, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteActivity($aid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("DELETE FROM `activity` WHERE `activity`.`activity_id` = ?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
