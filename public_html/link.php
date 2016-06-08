<?php
/**
 * Created by PhpStorm.
 * User: harrisonchow
 * Date: 6/7/16
 * Time: 3:23 AM
 */

$linkTo = $_GET['link'];
switch ($linkTo) {
    case "dev":
        $url = "https://developersfoundation.ca/";
        break;
    case "facebook":
        $url = "https://www.facebook.com/";
        break;
    case "blog":
    case "rss":
    case "medium":
        $url = "https://medium.com/";
        break;
    case "github":
        $url = "https://github.com/";
        break;
    case "home":
    default:
        $url = "https://nigerian.herokuapp.com/";
}

header("Location: " . $url);
exit;