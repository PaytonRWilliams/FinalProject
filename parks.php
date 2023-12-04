<?php
require_once("util-db.php");
require_once("model-parks.php");

$pageTitle = "Parks";
<link rel="stylesheet" href="bootstrap.css">
include "view-header.php";
$parks = selectParks();
include "view-parks.php";
include "view-footer.php";
?>
