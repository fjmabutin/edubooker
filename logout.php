<?php
session_start();

// destroy session
session_unset();
session_destroy();

// redirect to index.php
header("Location: index.php");
exit();
?>