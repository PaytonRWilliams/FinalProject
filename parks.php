<?php
require_once("util-db.php");
require_once("model-parks.php");

$pageTitle = "Parks";

include "view-header.php";





if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertPark($_POST['Pname'], $_POST['Pstate'])) {
        echo '<div class="alert alert-success" role="alert">Park added.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
    case "Edit":
      if (updatePark( $_POST['Pname'], $_POST['Pstate'], $_POST['Pid'])) {
        echo '<div class="alert alert-success" role="alert">Park edited.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
    break;
    case "Delete":
      if (deletePark($_POST['Pid'])) {
        echo '<div class="alert alert-success" role="alert">Park deleted.</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error.</div>';
      }
      break;
  }
}

$parks = selectParks();
include "view-parks.php";
include "view-footer.php";


?>
