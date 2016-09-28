<?php
error_reporting(0);
$page = $_GET['page'];

switch($page)
{
    case "home":
    case "index":
    default:
        $pagename = "home";
        break;
    case "portfolio":
        $pagename = "portfolio";
        break;
    case "icecream":
        $pagename = "icecream";
        $pagetitle ="Favorite Ice Cream Flavors";
        break;
    case "about":
        $pagename = "about";
        $pagetitle = "About Me";
        break;
}

include_once("assets/header.php");
include_once("pages/".$pagename.".php");
include_once("assets/footer.php");
?>