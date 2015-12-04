<?php
session_start();

//unset session login data variables
unset($_SESSION['github_data']);
unset($_SESSION['instagram_data']);
unset($_SESSION['login_data']);
unset($_SESSION['yahoo_data']);
unset($_SESSION['linkedin_data']);
unset($_SESSION['google_data']);
unset($_SESSION['facebook_data']);
unset($_SESSION['twitter_data']);

// just in case destroy session
session_destroy();

// redirect to index page
header("Location: index.php");
?>
