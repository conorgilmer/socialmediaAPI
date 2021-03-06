<?php
require("twitteroauth.php");

define("APPLICATION_PATH", ".");
require ( APPLICATION_PATH . "/includes/app_tokens_twitter.inc.php");
session_start();

$twitteroauth = new TwitterOAuth($consumer_key, $consumer_secret);
// Requesting authentication tokens, the parameter is the URL we will be redirected to
//$request_token = $twitteroauth->getRequestToken('http://www.conorgilmer.com/socialmediaAPI/private.php');
$request_token = $twitteroauth->getRequestToken('http://localhost/socialmediaAPI/private.php');

// Saving them into the session
$_SESSION['oauth_token'] = $request_token['oauth_token'];
$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
//$_SESSION['twitter_results'] = $request_token['screen_name'];
$_SESSION["route"] = "Twitter";


// catch when there is no connection i.e. twitter or curl blocked by ISP
if ($twitteroauth->http_code == 0) {
	die("NO TWITTER CONNECTION - either CURL blocked or Twitter blocked");
}

// If everything goes well..
if ($twitteroauth->http_code == 200) {
    // Let's generate the URL and redirect
        $_SESSION["loggedIn"]=1;
        $_SESSION["youare"]=$twitteroauth->screen_name;// "Twitter User";
    $url = $twitteroauth->getAuthorizeURL($request_token['oauth_token']);
    header('Location: ' . $url);
} else {
    // It's a bad idea to kill the script, but we've got to know when there's an error.
    die('Something wrong happened. Couldnt Connect to Twitter');
}
?>
