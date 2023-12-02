<?php
require_once("util-db.php");
require_once("model-parks.php");

$pageTitle = "Parks";
include "view-header.php";
$parks = selectParks();
include "view-parks.php";
include "view-footer.php";
?>
