<?php
$auth = new Account;
if(!$auth->isLoggedIn())
{
	General::redirectTo('login.php');
}
?>