<head>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed">
	<title>PHP Notepad++</title>
	<style>
	 body
	 {
	 	font-family: Roboto Condensed;
	 	text-shadow:0px 0px 5px #FF8C00;
	 }
	 #read_note
	 {
	 	color: #FF8C00;
	 	text-align: center;
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
$filename = $_POST['filename'];
$file = fopen( $filename , 'r') or die("<p align='center' style='color:red'>[-] Error : File ( $filename ) not exist or not readable. [ READ ERROR ]</p><br><center><a href='main.html' target='_self'>Back To Home</a>");
while (!feof($file)) 
{
	echo "<p align='center' style='color:#FF8C00;font-size:25px'>[+] Notes from : { $filename }</p>";
	echo '<div id="read_note">';
	echo "<pre>";
	$buffer = fread($file, 4096);
	echo $buffer;
	echo "</pre></div>";
}
?>
<hr color="#FF8C00">
<center>
<a href="main.html" target="_self">Back To Home</a>
</center>
</body>