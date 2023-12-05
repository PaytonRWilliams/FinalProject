<?php
require_once("util-db.php");
require_once("model-visitors.php");

$pageTitle = "Visitors";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertVisitor($_POST['vFname'], $_POST['vLname'], $_POST['vAge'])) {
        echo '<div class="alert alert-success" role="alert">Visitor added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Delete":
      if (deleteVisitor($_POST['vid'])) {
        echo '<div class="alert alert-success" role="alert">Visitor deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$visitors = selectVisitors();
include "view-visitors.php";
include "view-footer.php";
?>
