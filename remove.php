<head>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto+Condensed">
	<title>PHP Notepad++</title>
	<style>
	 body
	 {
	 	font-family: 'Roboto Condensed';
	 	text-shadow:0px 0px 5px #FF8C00;
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
/* delete file functions */
$filename = $_POST['filename'];
unlink($filename)
or die("<p align='center' style='color:red'>[-] Error : Unable to remove file ( $filename ) from database [ No Delete Access or File not Exist ].</p><br><center><a href='main.html'>Back To Home</a><p></center>");
echo "<p align='center' style='color:#FF8C00'>[!] Note File ( $filename ) Remove From Database Successfully..</p>";
echo '<center><a href="main.html">Back To Home</a><p></center>';
?>
<hr color="#FF8C00">
<p align="center" style="color:#FF8C00">&copy;Notepad++ | Tanmay Corporation | 2015-16</p>
</body>