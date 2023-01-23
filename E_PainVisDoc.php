<! SET CONNECTION WITH DATABASE >
	<?php
		$user = "root";
		$pass = "";
		$host = "localhost";
		$connection = mysqli_connect($host, $user, $pass);
	?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en"> <! STYLE >
	
	<! HEAD --------- > 
    <head>

	<! CSS CODE --------------- > 
		<style type="text/css">
		
		p { font-family: Arial;}
		h2 { margin-left: 5em; margin-right: 5em; }
		fieldset { margin-left: 5em; margin-right: 5em; background-color: #B0E0E6; border-color: #008B8B; }
		body {background-color: #F0F8FF;}

		.btnHL{
			position: absolute;
			left: calc(810px/2 - 40px);
			top: calc(715px/2 - 10px);
			border-radius: 50%;
			color: black;
			background-color:red;
			cursor: pointer;
		}


		</style>
		
		<style>
			body {background-color: #F0F8FF;}
		</style>

	    <title>PainDocVisPat</title>
	   	<h2><img src="PDLogo.jpg"
		width=210
		height=70
		/>
		<br>	
		<img src="PDLogo2.jpg" 
		width=100
		height=20
		/></h2>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    </head>
  
<body>

  <fieldset>
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
		<table>
			<tr>
				<th colspan="2"><h2>Search for patient</h2> </th>
			</tr>
			<tr>
				<td> 
					<label>Name:</label> 
					<input type="text" name="name">
				</td>
				<td>  
					<input type="submit" name="Search" value="Search">
				</td>
			</tr>
		</table>
		</form>

	</fieldset>

<! SET IMAGE VISUALIZATION >

 <br></br>

 <fieldset>

  <?php if(isset($_POST['Search'])){ ?>

			<div>
	
	<! SET SPECIFIC PAIN INFO >

		<?php 
			$name = $_POST['name'];

			if(empty($_POST['name'])){
				echo "<script language='JavaScript'>
				alert('Introduce a patient name');
				location.assign(E_PainVisDoc.php);
				</script>";
		?>

		<?php } else {

				?> <h2> Patient: <?php echo $name;

		?>

			</h2><br> 
				<figure>
					<img src="<?php echo $name ?>">
			  </figure>
			</div>

			<?php }	?>

  <?php	} else { ?>
	
			<table>
			</table>

  <?php } ?>

 </fieldset>

    </body>
</html>