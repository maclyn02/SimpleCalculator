<html>
	<head>
		<title>Simple Calculator</title>
	</head>
	<body>

		<form action="" method="post">
			Operand 1 : 
			<input type="text" name="op1">
			Operand 2 : 
			<input type="text" name="op2">

			Operator : 
			<select name="operator">
				<option value="+">+</option>
  				<option value="-">-</option>
  				<option value="*">*</option>
  				<option value="/">/</option>
			</select>
			
			<input type="submit" name="submit" value="SUBMIT">
		</form>
	
		<?php
			if(isset($_POST['submit']))
			{

				$n1=$_POST["op1"];
				$n2=$_POST["op2"];
				$result=0;
				switch($_POST['operator'])
				{
					case '+' : $result=$n1+$n2;
						   break;
					case '-' : $result=$n1-$n2;
						   break;
					case '*' : $result=$n1*$n2;
						   break;
					case '/' : $result=$n1/$n2;
					   break;
				}
				echo "<p>The result is : ".$result."</p>";
			}

		?>
	<body>
<html>