<head>
	<title>PHP Notepad++</title>
	<meta name="Author" content="Tanmay Upadhyay">
	<meta http-equiv="refresh" content="90">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed">
	<style>
	body
	{
		font-family: "Roboto Condensed";
		text-shadow:0px 0px 5px #FF8C00;
	}
	#login_box
	{
		margin: 5px;
		padding: 50px;
	}
	#user
	{
		background-color: #000000;
		text-align: center;
		color:green;
		border-color:#000000;
		border-radius: 8px;
		padding: 10px;
	}
	#pass
	{
		background-color: #000000;
		text-align: center;
		color:green;
		border-color:#000000;
		border-radius: 8px;
		padding: 10px;
	}
	#submit_button
	{
		border-color: #000000;
		border-radius: 8px;
		margin: 15px;
		padding: 15px;
		background-color: #FF8C00;
		color: #000000;
	}
	</style>
</head>
<body bgcolor="#000000" link="green" vlink="green" style="color:#FF8C00">
	<h1 align="center" style="color:#FF8C00">
		Notepad++ | Writt3n By Tanmay Upadhyay
	</h1>
	<p style="color:#FF8C00" align="center">
		Always belive in written stuff, not just oral..
	</p><br>
	<hr color="#FF8C00">
	<p align="center" style="font-size:20px">[!] Login Area [!]</p>
	<p align="center">To Start Using Notepad++ Program you need to verify yourself.</p>
<?php
echo '<form action="check.php" method="post" align="center" id="login_box">';
echo 'Username : <input type="text" name="username" placeholder="Username" autocomplete="off" id="user"><br>';
echo 'Password : <input type="password" name="password" placeholder="Password" autocomplete="off" id="pass">';
echo '<p align="center"><br></p>';
echo '<input type="submit" name="submit" value="Go. !" id="submit_button">';
echo '</form>';
?>
<hr color="#FF8C00">
<p align="center" style="color:#FF8C00">&copy;Notepad++ | Tanmay Corporation | 2015-16</p>
</body>