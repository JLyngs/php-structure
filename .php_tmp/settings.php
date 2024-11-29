<?php

$pagename = $_POST["page"] ?? $_GET["page"] ?? "home";
$page = "pages/$pagename.php"; 