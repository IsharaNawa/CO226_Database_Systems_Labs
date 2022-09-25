<html>
	<body bgcolor="#f1f1f1"  leftmargin="30">
		
		<?php
			if(isset($_GET["order"])){
				
				echo "<h1>Your Information System</h1>";
				echo "Thank you, ".$_GET["firstname"]." for your perches from our web site<br><br>";
				
				if(isset($_GET["selectColor"]) || isset($_GET["size"])){
					echo "your item color is : ".$_GET["selectColor"]." & T-Shirt size : ".$_GET["size"]."<br><br>";
				}
				
				if(isset($_GET["GearBand"]) || isset($_GET["GearCap"])){
					echo "Selected items/item are :<br><br>";
				}
				
				if(isset($_GET["GearBand"])){
					echo "*Wrist band<br><br>";
				}
				
				if(isset($_GET["GearCap"])){
					echo "*Cap<br><br>";
				}
				
				echo "your items will be sent to : <br><br>";
				echo "<i>".$_GET["firstname"]." ".$_GET["lastname"].",</i><br>";
				echo "<i>".$_GET["address1"] .",</i><br>";
				echo "<i>".$_GET["address2"] .",</i><br>";
				echo "<i>".$_GET["address3"] .",</i><br>";
				
				if(!empty($_GET["comment"])){
				echo "<br><br>Thank you for submitting your comments. We appreciate it. You said:<br><br>";
				
				echo "<i>". $_GET["comment"]. "<i>";
				}
				
				
			}
			
		?>
	</body>
</html>