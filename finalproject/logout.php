<?php
session_start();

if(isset($_SESSION['user_id'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_name']);
    header("Location: Index.php");
} else {
    header("Location: Index.php");
}
?>