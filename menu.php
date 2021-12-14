<?php 
include "cat/config.php";

if(isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case "home": 
            include "home.php";
            break;
        case "cat-detail":
            include "cat-detail.php";
            break;
        case "about-us":
            include "about-us.php";
            break;
        case "contact-us":
            include "contact-us.php";
            break;
        case "add-cat":
            include "add-cat.php";
            break;
        case "edit-cat":
            include "edit-cat.php";
            break;
        default:
            include "home.php";
            break;

    }
} else {
    include "home.php";
}
