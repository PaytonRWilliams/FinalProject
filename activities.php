<?php
require_once("util-db.php");
require_once("model-activities.php");

$pageTitle = "Activities";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertActivity($_POST['aName'], $_POST['aType'], $_POST['aCost'])) {
        echo '<div class="alert alert-success" role="alert">Activity added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateActivity( $_POST['aName'], $_POST['aType'], $_POST['aCost'], $_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Activity edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
    break;
    case "Delete":
      if (deleteActivity($_POST['aid'])) {
        echo '<div class="alert alert-success" role="alert">Activity deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$activities = selectActivities();
include "view-activities.php";
include "view-footer.php";
?>
