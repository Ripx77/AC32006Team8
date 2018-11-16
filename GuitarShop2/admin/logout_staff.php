<?php
/**
 * Created by PhpStorm.
 * User: Juura
 * Date: 23/10/2018
 * Time: 16:00
 */
/**
 *  Login system code taken from link below.
 *  Link: https://www.tutorialrepublic.com/php-tutorial/php-mysql-login-system.php
 */

// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: index.php");
exit;
?>