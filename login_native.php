<?php
/* ****************************************
 * Author: Conor Gilmer
 * Date: 
 *
 * *************************************** */
session_start();

//{ $bool = false;
  //  if ($username = '' and $password = 'letmein'){
//	$bool = true;
//	}
//
  //  return $bool;
//}

if (!empty($_POST)) 
{    
	// validate the input
    $s_username = htmlspecialchars($_POST['username']);
    $s_password = $_POST['password'];
    //call the login function on this page which returns true or false

    if ($s_username =="guest" and $s_password=="letmein") 
    {
	//	die (" $s_username oon the wayi $s_password");
        $_SESSION["loggedIn"]=1;
     //   $_SESSION["loggedInAs"] = "Natively";
        header("Location: private.php?youare=$s_username&loginfail=loggedin");
    }
    else
    { //die("not working");
        $vfail = "Wrong Username or Password try again";
        header("Location: index.php?loginfail=$vfail");
    }
}
else
{$efail = "Problem loggin on natively";
    header("Location: index.php?login=$efail");
}

?>
