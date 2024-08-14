<?php
// router.php

// Get the route parameter from the URL
$route = isset($_GET['route']) ? $_GET['route'] : ' ';

// Routing logic
switch ($route) {
    case 'login':
        if (isset($_GET['route']) && $_GET['route'] === 'login') {
            // Redirect to login.php
            header("Location: components/Login.php");
            exit(); // Ensure no further code is executed after redirection
        }
        break;
    case 'register':
        if (isset($_GET['route']) && $_GET['route'] === 'register') {
            // Redirect to login.php
            header("Location: components/Register.php");
            exit(); // Ensure no further code is executed after redirection
        }
        break;
    case 'search':
        if (isset($_GET['route']) && $_GET['route'] === 'search') {
            // Redirect to login.php
            header("Location: components/SearchPosts.php");
            exit(); // Ensure no further code is executed after redirection
        }
        break;
    case 'postanadvertisement':
        if (isset($_GET['route']) && $_GET['route'] === 'postanadvertisement') {
            // Redirect to login.php
            header("Location: components/PostAnAdvertisement.php");
            exit(); // Ensure no further code is executed after redirection
        }
        break;
    default:
        include 'index.php'; // Default to home page or 404
        break;
}
?>
