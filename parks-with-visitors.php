<?php
require_once("util-db.php");
require_once("model-parks-with-visitors.php");

$pageTitle = "Parks with Visitors";
include "view-header.php";
$parks = selectParks();
include "view-parks-with-visitors.php";
include "view-footer.php";
?>
