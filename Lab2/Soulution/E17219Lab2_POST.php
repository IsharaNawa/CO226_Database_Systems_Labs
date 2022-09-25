<html>
	<body bgcolor="#f1f1f1"  leftmargin="30">
		
		<?php
			if(isset($_POST["order"])){
				
				echo "<h1>Your Information System</h1>";
				echo "Thank you, ".$_POST["firstname"]." for your perches from our web site<br><br>";
				
				if(isset($_POST["selectColor"]) || isset($_POST["size"])){
					echo "your item color is : ".$_POST["selectColor"]." & T-Shirt size : ".$_POST["size"]."<br><br>";
				}
				
				if(isset($_POST["GearBand"]) || isset($_POST["GearCap"])){
					echo "Selected items/item are :<br><br>";
				}
				
				if(isset($_POST["GearBand"])){
					echo "*Wrist band<br><br>";
				}
				
				if(isset($_POST["GearCap"])){
					echo "*Cap<br><br>";
				}
				
				echo "your items will be sent to : <br><br>";
				echo "<i>".$_POST["firstname"]." ".$_POST["lastname"].",</i><br>";
				echo "<i>".$_POST["address1"] .",</i><br>";
				echo "<i>".$_POST["address2"] .",</i><br>";
				echo "<i>".$_POST["address3"] .",</i><br>";
				
				if(!empty($_POST["comments"])){
				
				echo "<br><br>Thank you for submitting your comments. We appreciate it. You said:<br><br>";
				
				echo "<i>". $_POST["comments"]. "<i>";
				}
				
				
			}
			
		?>
	</body>
</html>