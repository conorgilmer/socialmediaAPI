<?php
/* Author: Conor Gilmer
 * connect to google using google client
 *
 */
session_start();
define("APPLICATION_PATH", ".");
// import in the client id and secret
require ( APPLICATION_PATH . "/includes/app_tokens_google.inc.php");
//from quickstart
require('google-api-php-client/src/Google_Client.php');
require('google-api-php-client/src/contrib/Google_PlusService.php');

$client = new Google_Client();
$client->setApplicationName('SocialMediaAPI');
$client->setClientId($CLIENT_ID);
$client->setClientSecret($CLIENT_SECRET);
$client->setRedirectUri($REDIRECT_URL);
$client->setDeveloperKey($DEVELOPER_KEY);
$plus = new Google_PlusService($client);

$_SESSION['route'] = "Google Account";
if (isset($_GET['code'])) {
    $client->authenticate();
    $_SESSION['token'] = $client->getAccessToken();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['google_token'])) {
    $client->setAccessToken($_SESSION['google_token']);
}

if ($client->getAccessToken()) {
//    $activities = $plus->activities->listActivities('me', 'public');
//    print 'Your Activities: <pre>' . print_r($activities, true) . '</pre>';

    // We're not done yet. Remember to update the cached access token.
    // Remember to replace $_SESSION with a real database or memcached.
    $_SESSION['google_token'] = $client->getAccessToken();
   // $_SESSION['loggedIn']=1;
    header('Location: ./index.php');
} else {
     $_SESSION['loggedIn']=1;
     $_SESSION['youare']="google user";
    $authUrl = $client->createAuthUrl();
    header('Location:' . $authUrl);
}
?>
