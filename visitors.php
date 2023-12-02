<?php
require_once("util-db.php");
require_once("model-visitors.php");

$pageTitle = "Visitors";
include "view-header.php";
$courses = selectVisitors();
include "view-visitors.php";
include "view-footer.php";
?>
