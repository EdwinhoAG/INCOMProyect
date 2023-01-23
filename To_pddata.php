<! DATABASE - PHP SERVER CONNECTION>
    <?php
	$user = "root";
	$pass = "";
	$host = "localhost";
	$datab = "paindocdb";
	$connection = mysqli_connect($host, $user, $pass, $datab);
	?>

<?php session_start(); ?>

<! RECIBE SPECIFIC PAIN DATA >
    <?php
    /* Global SESSION variables*/
    $name = $_SESSION['name'];
	$bodySite = $_SESSION['bodySite'];
	$side = $_SESSION['side'];
	/* Form POST variables*/
	$painful = $_POST['painful'];
	$period = $_POST['period1']." ".$_POST['period2'];

  	$dayTime = $_POST['dayTime'];
    $N1 = count($dayTime);
    $AlldayTime = "";
    for($i=0; $i < $N1; $i++) { 
    	$AlldayTime = $AlldayTime.$dayTime[$i].", "; 
    };

	$intervall = $_POST['intervall'];

	$kind = $_POST['kind'];
	$N2 = count($kind);
	$Allkind = "";
	for($i=0; $i < $N2; $i++) {
		$Allkind = $Allkind.$kind[$i].", ";
	};
	
	$impairment = $_POST['impairment'];
	$N3 = count($impairment);
	$Allimpairment = "";
	for($i=0; $i < $N3; $i++) {
	$Allimpairment = $Allimpairment.$impairment[$i].", ";
	};
	
	$painkillers = $_POST['painkillers'];
	?>

<html lang="en"> 
    <head> <! STYLE >
		<style>
		body {background-color: #F0F8FF;}
		</style>
		<style type="text/css">
		p { font-family: Arial;}
		</style>
	        <title>PainDoc</title>
	    	<img src="PDLogo.jpg" 
		width=210
		height=70
		/>
		<BR>
		<img src="PDLogo2.jpg" 
		width=100
		height=20
		/>
		</BR>
    </head>

  <! SEND PAIN DATA TO DB 'paindocalldata' - PHP SERVER>
    <?php
	$to_data = "INSERT INTO  paindocalldata (OB, name, side, bodySite, painful, period, dayTime, intervall, kind, impairment, painkillers) VALUES ('', '$name', '$side', '$bodySite', '$painful', '$period', '$AlldayTime', '$intervall', '$Allkind', '$Allimpairment', '$painkillers')";
	$res2 = mysqli_query($connection, $to_data);
    ?>

<body>

  <! SHOW SPECIFIC PAIN DATA >
  	<table>
  		<tr>
			<h3> Patient Name: <?php echo "$name";?> </h3>
			<h3> Body part: <?php echo "$bodySite";?> </h3>
			<h3> Side: <?php echo "$side";?> </h3>
			<h3> Painful level: <?php echo "$painful";?> </h3>
			<h3> Since: <?php echo "$period";?> </h3>
			<h3> When on the day: <?php echo ("$AlldayTime"); ?> </h3>
			<h3> Intervall: <?php echo "$intervall";?> </h3>
			<h3> The pain is: <?php echo ("$Allkind"); ?> </h3>
			<h3> Impairments: <?php echo ("$Allimpairment");?> </h3>
			<h3> Use of painkillers: <?php echo "$painkillers";?> </h3>
		<tr>
	</table>

</body>

</html>