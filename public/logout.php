<?php
    session_start();
    unset($_SESSION['is_logged_in']);
    unset($_SESSION['admin']);
    header('Location: admin-login.php');