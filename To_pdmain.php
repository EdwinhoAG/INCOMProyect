<! RECIBE AND SHOW PAINDOC SIGN IN DATA>
    <?php
	$name = $_POST['name'];
	$birthDate = $_POST['birthDate'];
    ?>

<! SEND ID DATA TO DB 'paindocmain' - PHP SERVER>
    <?php
	$to_users = "INSERT INTO paindocusers (ID, Name, birthDate) VALUES ('', '$name', '$birthDate')";
	$res= mysqli_query($connection, $to_users);

	$req_OB = "SELECT `ID` FROM paindocusers WHERE `name` = '$name' ORDER BY `paindocusers`.`ID` ASC";
	$res2 = mysqli_query($connection, $req_OB);
	
	foreach ($res2 as $info => $ids) {
	  foreach($ids as $id => $value)
		{
		  /* echo "$info: $ids \n $id: $value \n";
		  	echo "<h3> $OB </h3>"; */
		  $OB = $value;
		}
	}

	/* echo "<h3> $OB </h3>"; */

    ?>

<! SEND '$name' to 'B_PainSelect.php' >
	<?php
		$_SESSION['name'] = $name;
		$_SESSION['A'] = 'DOS';
		$_SESSION['OB'] = $OB;
	?>

<! START btn colors and keys >

	<?php
		$btns = array(
					array("HeadR", 0, 0, 0),
					array("HeadL", 0, 0, 1),
					array("NeckR", 0, 0, 2)
				);
		$_SESSION['btns']=$btns;
		$_SESSION['JE']=1000;
	?>

<! ARRAY 'btns' EXPLANATION >
	<?php 
		/* __ Rows __|______________________  Columns  _______________________|    */
		/* | # array | BodySite [0] | Btn Color [1] |   Key[2]   |   JE[3]    |    */
		/* |  [0]    |(   " - "     ,       #       ,     #      ,     0      |    */
		/* |  [1]    |(   " - "     ,       #       ,     #      ,     1      |    */
		/* |  [2]    |(   " - "     ,       #       ,     #      ,     2      |    */
		/* |  [3]    |(   " - "     ,       #       ,     #      ,     3      |    */
		/* |  [.]    |(   " - "     ,       #       ,     #      ,     .      |    */
		/* |  [.]    |(   " - "     ,       #       ,     #      ,     .      |    */
		/* |  [n]    |(   " - "     ,       #       ,     #      ,     n      |    */

		/* n = # bodySites */
	?>
