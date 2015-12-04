<?php
session_start();
unset($_SESSION['github_data']);
session_destroy();
header("Location: index.php");
?>
