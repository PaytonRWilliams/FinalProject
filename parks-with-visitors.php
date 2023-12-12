<?php
require_once("util-db.php");
require_once("model-parks-with-visitors.php");

$pageTitle = "Parks with Visitors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertVisit($_POST['pid'], $_POST['vid'], $_POST['visit_date'])) {
        echo '<div class="alert alert-success" role="alert">Visit added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updateVisit($_POST['pid'], $_POST['vid'], $_POST['visit_date'], $_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Visit edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteVisit($_POST['tid'])) {
        echo '<div class="alert alert-success" role="alert">Visit deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$parks = selectParks();
include "view-parks-with-visitors.php";
include "view-footer.php";
?>
