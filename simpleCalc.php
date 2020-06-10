<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Simple Calculator</title>
	</head>
	<body>
		<!--	Sets the form tag to get the variables num1, num2, and operation	-->
		<form method="GET" action="#">
			<p>Put two numbers to add them.</p>
			<p>
				<input type="text" name="num1" placeholder="Enter the first number..." />
				<select name="operation">
					<option value="+">+</option>
					<option value="-">-</option>
					<option value="*">*</option>
					<option value="/">/</option>
				</select>
				<input type="text" name="num2" placeholder="Enter the second number...">
				<input type="submit" value="Calculate"/>
			</p>
		</form>
		<?php
			// Makes sure that the incoming requests are GET Method with the following variables: num1, num2, operation
			// Side note: For some reason, if the total will be 0 (example: 0 + 0), it will not echo the number 0
			if($_GET["num1"] && $_GET["num2"] && $_GET["operation"]){
				$num1 = $_GET["num1"];				// Set get method variable num1 to php variable $num1
				$num2 = $_GET["num2"];				// Set get method variable num2 to php variable $num2
				$operation = $_GET["operation"];	// Set get method variable operation to php variable $operation
				$total = 0;							// Empty variable to set the total

				// Checks if variable num1 and num2 are numbers
				if(is_numeric($num1) && is_numeric($num2)){
					// Switch case for operation variable
					switch($operation){
						case '+':
							$total = $num1 + $num2;		// If the operation is addition, add num1 and num2 and set it to the total variable. Then break
							break;
						case '-':
							$total = $num1 - $num2;		// If the operation is subtraction, subtract num1 and num2 and set it to the total variable. Then break
							break;
						case '*':
							$total = $num1 * $num2;		// If the operation is multiplication, multiply num1 and num2 and set it to the total variable. Then break
							break;
						case '/':
							$total = $num1 / $num2;		// If the operation is division, divide num1 and num2 and set it to the total variable. Then break
							break;
					}
					echo $total;		// Print the total
				}else{
					echo "Please enter only numbers.";	// Echos if either variable num1 or num2 are not numbers
				}
			}
		?>
	</body>
</html>