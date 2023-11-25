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
	#saved
	{
		margin: 50px;
		text-align: center;
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
$filename = $_POST['filename'];
$note = $_POST['note_matter'];
$file = fopen($filename,"a+");
fwrite($file,$note) or die("<p align='center'><span style='color:red'>[-] Error : You have no write access on ( $filename ) or Invalid Path.</span></p><br><center><a href='main.html'>Back To Home</center></a>");
echo '<div id="saved">';
echo '<a href="main.html" target="_self">HOME</a> | ';
echo '<a href="mailto:tanmay4035266@gmail.com?Subject=Hello%20again" target="self">CONTACT ME</a> <br><br>';
print "[!] Your NOTE saved successfully as ( $filename )";
echo '</div>';
echo '<hr color="#FF8C00">';
echo '<p align="center">&copy;Notepad++ | Tanmay Corporation | 2015-16</p>';
die;
?>
</body>