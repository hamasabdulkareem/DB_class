<?php
include("core/route.php");
include("core/controllers.php");
include("core/view.php");
include("core/model.php");
$url=isset($_GET['url'])?$_GET['url']:"home";
new Route ($url);
?>