<?php
$view = isset($_GET['view']) ? $_GET['view'] : 'home';
switch ($view) {
    case 'login':
        include 'view/system/login.php';
        break;
    case 'signout':
        include 'view/system/signout.php';
        break;
    default:
        include 'view/template/home.php';
        break;
}