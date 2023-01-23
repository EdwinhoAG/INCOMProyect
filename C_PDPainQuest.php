<! DATABASE - PHP SERVER CONNECTION>
    <?php
	$user = "root";
	$pass = "";
	$host = "localhost";
	$datab = "paindocdb";
	$connection = mysqli_connect($host, $user, $pass, $datab);
	?>

<! RECIBE '$name' && '$bodySite' && 'side' from 'B_PDSelect.php' >
	<?php 
	$bodySite = $_SESSION['bodySite'];
	$side = $_SESSION['side'];
	$btns = $_SESSION['btns'];
	$n=3; /* # bodysites */
	$bs=$bodySite.$side;
	for ($a=0; $a < $n; $a++) {
			if ($bs==$btns[$a][0]){
				 $JE = $a;
			};
	};
	
	?>

<!doctype html>
<html lang="en">
<head>
	<! SLIDER STYLE >
		<style>
			.rangeslider{
			    width: 50%;
			}
			.myslider {
			    -webkit-appearance: none;
			    background: #B0E0E6  ; 
			    width: 50%;
			    height: 15px;
			    opacity: 1;
			   } 
			.myslider::-webkit-slider-thumb {
			    -webkit-appearance: none;
			    cursor: grab;
			    background: #000000  ;
			    width: 5%;
			    height: 15px;
			}
			.myslider:hover {
			    opacity: 1;
			} 
		</style>

	<! PAGE STYLE >

		<style type="text/css">
		p { font-family: Arial;}
		h2 { margin-left: 5em; margin-right: 5em; }
		fieldset { margin-left: 5em; margin-right: 5em; background-color: #B0E0E6; border-color: #008B8B; }
		
		table, th, td {
  		border: 1px solid white;
  		border-collapse: collapse;
		}
		th, td {
  		border-style: hidden;
  		border-radius: 10px;
  		padding-top: 5px;
  		padding-left: 5px;
  		padding-right: 10px;
  		padding-bottom: 5px;
		}

		</style>
		<style>
		body {background-color: #F0F8FF;}
		</style>
	        <title>PainDocQuest</title>
	    	<h2><img src="PDLogo.jpg" 
		width=210
		height=70
		/>
		<br>
		<img src="PDLogo2.jpg" 
		width=100
		height=20
		/></h2>

</head>

  <body>

<! PAIN QUESTIONNARIE TITLE >

	<fieldset>
	<table>
		<thead>
			<tr>
				<td> <h4> Patient: </h4> <h3> <?php echo "$name"; ?> </h3> </td>
				<td> <h4> Body Part: </h4> <h3> <?php echo "$bodySite"; ?> </h3> </td>
				<td> <h4> Side: </h4> <h3> <?php echo "$side"; ?> </h3> </td>
				<td> <h4> Side: </h4> <h3> <?php echo "$JE"; ?> </h3> </td>
			</tr>
		</thead>
	</table>
	</fieldset>

<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">

<! SLIDER - painful > 
	<fieldset>
		<legend><h3><p>How intense is your pain?</p></h3></legend>
      	<img src="PainDScale.png" width=180 height=50 />
			
			<div class="rangeslider">
  			 <input type="range" name=painful min="1" max="10" value="1" class="myslider" id="sliderRange"> 
  			 <p>Value: <span id="demo"></span></p>
			</div>
  	
			<script>
				var rangeslider = document.getElementById("sliderRange");
				var output = document.getElementById("demo");
				output.innerHTML = rangeslider.value;
  				
  				rangeslider.oninput = function() { output.innerHTML = this.value; }
			</script>
	</fieldset>

<! PERIOD - period > 	
	<fieldset>
        <legend><p>Since when do you have the pain at this area?</p></legend>
		<p>Enter date/time:
   		
   		<input type="text" name="period1" size="3"/>

		<select name="period2">
     		<option>day</option>
     		<option>week</option>
     		<option>month</option>
   		</select>
	</fieldset>

<! WHAT TIME A DAY - dayTime >
	<fieldset>
        <legend><p>At which time of the day do you have this pain?</p></legend>
		 <p>Choose:
 			<p><input type="checkbox" name="dayTime[]" value="Morning"/> Morning
			<input type="checkbox" name="dayTime[]" value="Evening"/> Evening  
   			<p><input type="checkbox" name="dayTime[]" value="Lunch"/> Lunch 
			<input type="checkbox" name="dayTime[]" value="Night"/> Night 
   			<p><input type="checkbox" name="dayTime[]" value="Afternoon"/> Afternoon 
   			<input type="checkbox" name="dayTime[]" value="The whole day"/> The whole day </p>
	</fieldset>

<! PAIN INTERVALL - intervall >
	<fieldset>
        <legend><p>How is your pain intervall?</p></legend>
		 <p>Choose:
 			<p>
 				<img src="Constant pain with slight fluctuations.png"/>
 				<input type="radio" name="intervall" value="Constant pain with slight fluctuations"/>
 				Constant pain with slight fluctuations
				<img src="Constant pain with strong fluctuations.png"/>
				<input type="radio" name="intervall" value="Constant pain with strong fluctuations"/>
				Constant pain with strong fluctuations
			<p>
				<img src="Pain attacks, painless in between.png"/>
				<input type="radio" name="intervall" value="Pain attacks, painless in between"/>
				Pain attacks, painless in between
				<img src="Pain attacks, also between.png"/>
				<input type="radio" name="intervall" value="Pain attacks, also between"/>
				Pain attacks, also between
	</fieldset>
	
<! KIND OF PAIN - kind > 
	<fieldset>
        <legend><p>What kind of pain is it?</p></legend>
		 <p>Choose:
 			<p><input type="checkbox" name="kind[]" value="Dull"/> Dull
			<input type="checkbox" name="kind[]" value="Pungent"/> Pungent 
   			<p><input type="checkbox" name="kind[]" value="Oppressive"/> Oppressive 
			<input type="checkbox" name="kind[]" value="Pulling"/> Pulling 
   			<p><input type="checkbox" name="kind[]" value="Throbbing"/> Throbbing
   			<input type="checkbox" name="kind[]" value="Hot"/> Hot
			<p><input type="checkbox" name="kind[]" value="Knocking"/> Knocking
   			<input type="checkbox" name="kind[]" value="Burning"/> Burning
	</fieldset>

<! IMPAIRMENT - impairment >
	<fieldset>
        <legend><p>Do you have any impairments in everyday life?</p></legend>
		 <p>Choose if yes:
			<p><input type="checkbox" name="impairment[]" value="sitting"/> Sitting
			<input type="checkbox" name="impairment[]" value="eating"/> Eating
			<input type="checkbox" name="impairment[]" value="cooking"/> Cooking
			<input type="checkbox" name="impairment[]" value="walking"/> Walking
			<input type="checkbox" name="impairment[]" value="car driving"/> Car driving
			<p><input type="checkbox" name="impairment[]" value="gardening"/> Gardening
			<input type="checkbox" name="impairment[]" value="shopping"/> Shopping
			<input type="checkbox" name="impairment[]" value="laundry"/> Laundry
			<input type="checkbox" name="impairment[]" value="cycling"/> Cycling
			<input type="checkbox" name="impairment[]" value="running"/> Running
			<p><input type="checkbox" name="impairment[]" value="swimming"/> Swimming
			<input type="checkbox" name="impairment[]" value="work"/> Work
			<input type="checkbox" name="impairment[]" value="long standing"/> Long standing
			<input type="checkbox" name="impairment[]" value="other:"/> Other:
			<input type="text" name="impairment[]" size="20"/>
	</fieldset>

<! ¿USE OF PAINKILLERS? - painkillers >
	<fieldset>
        <legend><p>Did you take painkillers because of this pain?</p></legend>
		 <p>Choose:
			<p><input type="radio" name="painkillers" value="yes"/> Yes
			<input type="radio" name="painkillers" value="no"/> No
	</fieldset>

<! SAVE BTN >
	<fieldset>
		<legend><h3> Click to save your data </h3></legend>
		<input type="submit" name="Save" value="          Save          "/>

	</fieldset>

</form>

<! SEND data to paindocalldata DATABASE >
		<?php if(isset($_POST['Save'])){ ?>

					<! RECIBE SPECIFIC PAIN DATA >
					    <?php
							  /* Global SESSION variables*/
							  $name = $_SESSION['name'];
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

					<! CHECK AND SEND PAIN DATA TO `paindocalldata` DATABASE >
						<?php

						if( empty($_POST['painful']) || empty($_POST['period1']) || empty($_POST['dayTime']) || empty($_POST['intervall']) || empty($_POST['kind']) || empty($_POST['painkillers']) ){
									echo "<script language='JavaScript'>
									alert('Fill at least all the marked information *');
									location.assign(C_PDPainQuest.php);
									</script>";
						?>

						<?php } else { ?>

								<?php 
									$key=$btns[$JE][2];
									if($key==1){	
								?>

										<! UPDATE PAIN DATA IN DB 'paindocalldata' - PHP SERVER>
					    				<?php
											$toUP_data = "UPDATE  paindocalldata SET painful='$painful', period='$period', dayTime='$AlldayTime', intervall='$intervall', kind='$Allkind', impairment='$Allimpairment', painkillers='$painkillers' WHERE `OB`='$OB' AND `bodySite`='$bodySite' AND `side`='$side' ";
											$R2 = mysqli_query($connection, $toUP_data);
					    				?>

					    	<?php } else { ?>

					    			<! SEND PAIN DATA TO DB 'paindocalldata' - PHP SERVER>
					    				<?php
											$to_data = "INSERT INTO  paindocalldata (OB, name, side, bodySite, painful, period, dayTime, intervall, kind, impairment, painkillers) VALUES ('$OB', '$name', '$side', '$bodySite', '$painful', '$period', '$AlldayTime', '$intervall', '$Allkind', '$Allimpairment', '$painkillers')";
											$R1 = mysqli_query($connection, $to_data);
											$btns[$JE][2] = 1;
					    				?>

					    	<?php } ?>
							  
						<?php }	?>

					<! CHANGE COLOR OF THE BUTTON >
						<?php 
							$btns[$JE][1]=$painful;
							$_SESSION['btns']=$btns;
						?>

					<! RELOAD PAGE >
						<script> location.href = "B_PDSelect.php"; </script>			

		 <?php } ?>

	</body>
</html>


