<?php
/**
 * Authentication check - include this at the top of all protected pages.
 * Redirects to login.php if user is not logged in.
 */
session_start();
if (empty($_SESSION['matric_no'])) {
    header("Location: login.php");
    exit;
}
