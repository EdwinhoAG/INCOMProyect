<! DOCTYPE HTML>

<! SESSION START >

<?php
	session_start();
	$_SESSION['A']='UNO';
	$_SESSION['OB'] = 0;
?>

<! HTML SCRIPT >

<html lang="en"> 
  <head> <! STYLE >
  	<style>
		body {background-color: #F0F8FF;}
	</style>
	
	<style type="text/css">
		p { font-family: Arial;}
	</style>
	
	<title> PainDoc Sign In </title>
	<img src="PDLogo.jpg" width=210 height=70 />
	<BR>
	<img src="PDLogo2.jpg" width=100 height=20 />

  </head>

    <body>

    	<h3><B><p>Sign in:</B></h3>

	<form action="B_PDSelect.php" method="POST">

		<br><h4>Complete Name:</h4>
	    <p><input type="text" name="name" id="name" size="50"/>
	    <br><h4>Date of Birth:</h4>
	    <p><input type="date" id="birthDate" name="birthDate" value="yyyy-mm-dd" min="1930-01-01" max="2023-02-28">
	    <br><p><br><input type="submit" value="Register"/>

	</form>

    </body>
</html>

