<!DOCTYPE html>
<html>
<head>
	<title>PHP Notepad++</title>
	<meta name="Author" content="Tanmay Upadhyay">
	<meta http-equiv="refresh" content="90">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed">
	<style>
	body
	{
		font-family: "Roboto Condensed";
		text-shadow: 0px 0px 8px #FF8C00;
	}
	</style>
</head>
<body bgcolor="#000000" link="green" vlink="green">
	<h1 align="center" style="color:#FF8C00">
		Notepad++ | Writt3n By Tanmay Upadhyay
	</h1>
	<p style="color:#FF8C00" align="center">
		Always belive in written stuff, not just oral..
	</p><br><hr color="#FF8C00">
<?php
/* it check for login if correct than grant access or just kickout.*/
$utoken = "90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad";
$ctoken = "2d233de973324287dbe95e07f75df3e0a61a378b";
function hash_check($utoken,$ctoken)
{
	$username = sha1(md5($_POST['username']));
    $password = sha1(md5($_POST['password']));
    if($username == $utoken && $password == $ctoken)
    {
    	/* if username and password return true or correct */
    	echo '<p align="center" style="font-size:20px;color:#FF8C90">[!] Login Success, Redirecting To Notepad++ UI in ( 3 ) Sec......';
    	echo '<meta http-equiv="refresh" content="2;url=main.html">';
    }
    else
    {
    	/* if username or password return false or incorrect */
    	echo '<p align="center" style="color:#FF8C00">[!] Always respect others <span style="color:red">privacy</span>, if you are not owner of this script then leave this program now.</p>';
    	echo '<p align="center" style="color:#FF8C00">[-] Error : Incorrect Username Or Password. Please Try <a href="index.php" target="_self">Again.</p></a>';
    }
}
hash_check($utoken,$ctoken);
?>
<hr color="#FF8C00">
<p align="center" style="color:#FF8C00">&copy;Notepad++ | Tanmay Corporation | 2015-16</p>
</body>