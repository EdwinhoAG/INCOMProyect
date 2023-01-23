<! DOCTYPE HTML >

<! DATABASE - PHP SERVER CONNECTION >
    <?php
	$user = "root";
	$pass = "";
	$host = "localhost";
	$datab = "paindocdb";
	$connection = mysqli_connect($host, $user, $pass, $datab);
	?>

<?php session_start(); ?>

<! RECIBE AND SEND 'A_PD.php' DATA - ONLY 1 TIME >
    <?php 
    if ($_SESSION['A']=='UNO'){
    include_once 'To_pdmain.php';
	} ?>

<! RECIBE '$name' & 'OB' & 'btns' initialization array FROM 'A_PD.php'>
	<?php
		$name = $_SESSION['name']; /* Recibe Patient Name */
		$OB = $_SESSION['OB']; /*Recibe OB => Observation Nr.*/
		$btns = $_SESSION['btns']; /* Recibe btns array */
	?>

<! SET BTNS COLORS ARRAY >
	<?php
		$colors = ['none', 'green', 'green', 'lime', 'lime', 'yellow', 'yellow', 'orange', 'orange', 'red', 'red']; /* Set colors */
	?>

<! HTML SCRIPT >

<html lang="en"> 
  <head> 

  <! PAGE STYLE >
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

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <! BODY BTNS STYLE >
	<style>
	
	<?php $cHeadR = $btns[0][1]; ?> 
	.sHeadR { position: absolute; left: calc(815px/2 - 40px); top: calc(835px/2 - 10px); border-radius: 50%; color: black; background-color: <?php echo "$colors[$cHeadR]" ?> ; cursor: pointer; }

	<?php $cHeadL = $btns[1][1]; ?> 
	.sHeadL { position: absolute; left: calc(915px/2 - 40px); top: calc(835px/2 - 10px); border-radius: 50%; color: black; background-color: <?php echo "$colors[$cHeadL]" ?> ; cursor: pointer; }
	
	</style>

  </head>

  <BR></BR>

  <body>

  	<BR>
  	<fieldset>
  		<h2> Name: <?php echo "$name"; ?> </h2>
  		
  	</fieldset>
  	</BR>
  	
  	<BR>
	<fieldset>

		<div>
	  	  <figure>
	  		<img src="Body3.jpg"/>

	  		  <! BTN HEAD R >
				<div class="w3-container">
				  <button onclick="document.getElementById('wHeadR').style.display='block'" name="ONHeadR" class="sHeadR" method=POST >+</button>
				  <div id="wHeadR" class="w3-modal">
				    <div class="w3-modal-content">
				      <div class="w3-container">
				        <span onclick="document.getElementById('wHeadR').style.display='none'" class="w3-button w3-display-topright">&times;</span>
							        	<?php
							        	if (name=="ONHeadR"){

							        	$_SESSION['bodySite']="Head";
							        	$_SESSION['side']="R";
							        	include("C_PDPainQuest.php");

							        	}

							        	?>
				      </div>
				    </div>
				  </div>
				</div>


			  <! BTN HEAD L >
				<div class="w3-container">
				  <button onclick="document.getElementById('wHeadL').style.display='block'" name="HeadR" class="sHeadL">+</button>
				  <div id="wHeadL" class="w3-modal">
				    <div class="w3-modal-content">
				      <div class="w3-container">
				        <span onclick="document.getElementById('wHeadL').style.display='none'" class="w3-button w3-display-topright">&times;</span>
							        	<?php
							        	$_SESSION['bodySite']="Head";
							        	$_SESSION['side']="L";
							        	include("C_PDPainQuest.php");
							        	?>
				      </div>
				    </div>
				  </div>
				</div>





	  	  </figure>
	  	<div>

	</fieldset>
	</BR>

  </body>
 </html>