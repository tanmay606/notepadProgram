<head>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed">
	<title>PHP Notepad++</title>
	<style>
	body
	{
		 text-shadow:0px 0px 5px #FF8C00;
         font-family: 'Roboto Condensed';
	}
	hr
	{
		padding: 0px;
		margin: 0px;
	}
	#filename
	{
		border-radius: 20px;
		border-color: #000000;
		background-color: #000000;
		text-align: center;
		color:#FF8C00;
		text-shadow:0px 0px 5px;
	}
	#note
	{
		color:#FF8C00;
		border-color:red;
		background-color: #000000;
		border-radius: 2px;
		width: 900px;
		height: 500px;
		margin: 10px;
		padding:50px;
	}
	#submit_button
	{
		color:#000000;
		border-radius: 5px;
		background-color: #FF8C00;
		border-color: #000000;
		padding: 10px;
	}
	</style>
</head>
<body bgcolor="#000000" style="color:#FF8C00" link="green" vlink="green">
	<h1 align="center" style="color:#FF8C00">
		Notepad++ | Writt3n By Tanmay Upadhyay
	</h1>
	<p style="color:#FF8C00" align="center">
		Always belive in written stuff, not just oral..
	</p><br>
	<hr color="#FF8C00">
<?php
/* Notepad++ Php Script to handle Commands.*/
$cmd = $_POST['cmd'];
if($cmd == "WRITE" or $cmd == "write")
{
    /* if cmd is write */
    echo '<p align="center">[!] Always respect others <span style="color:red">privacy</span>, if you are not owner of this script then leave this program now.</p>';
    echo '<form align="center" method="post" action="save_note.php">';
    echo '[!] New Filename : <input placeholder="Enter New Filename" autocomplete="off" type="text"  name="filename" id="filename">';
    echo '<br><br><hr color="#FF8C00">';
    echo '<p align="center">Type your notes below and Press [ Save Me ] Button when complete to save it.</p>';
    echo '<textarea id="note" name="note_matter" placeholder="enter your note here..."></textarea>';
    echo '<br>';
    echo '<input id="submit_button" type="submit" name="submit_note" value="Save Me !">';
    echo '</form>';
  }
elseif($cmd == "READ" or $cmd == "read")
{
	/* if cmd is read */
	echo '<p align="center">[!] Always respect others <span style="color:red">privacy</span>, if you are not owner of this script then leave this program now.</p>';
	echo '<form action="read.php" method="post" align="center">';
	echo '[!] File To Open : <input type="text" id="filename" name="filename" autocomplete="off" placeholder="File To Open"> ';
	echo '<input type="submit" id="submit_button" name="submit" value="Read Note !">';
	echo '<p align="center" style="color:#FF8C00"><a href="main.html" target="_self">Home</a>';
	echo '</form>';

}
elseif($cmd == "remove" or $cmd == "REMOVE")
{
	/* if cmd is remove */
	echo '<p align="center">[!] Always respect others <span style="color:red">privacy</span>, if you are not owner of this script then leave this program now.</p>';
	echo '<form action="remove.php" method="post" align="center">';
	echo '[!] Filename To Remove : <input type="text" id="filename" name="filename" autocomplete="off" placeholder="File To Remove"> ';
	echo '<input type="submit" id="submit_button" name="submit" value="Remove Note !">';
	echo '<p align="center" style="color:#FF8C00"><a href="main.html" target="_self">Home</a>';
	echo '</form>';
}
else
{
	/* if cmd is unknown */
	echo '<p align="center">[!] Always respect others <span style="color:red">privacy</span>, if you are not owner of this script then leave this program now.</p>';
	echo '<p style="color:red" align="center">[-] Error : Empty Command or Invalid Command Detected.';
	echo "<br>";
	echo '<center><a href="main.html" target="_self">Back To Home</a></center>';
	die;
}

?>
<hr color="#FF8C00">
<p align="center" style="color:#FF8C00">&copy;Notepad++ | Tanmay Corporation | 2015-16</p>
</body>