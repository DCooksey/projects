<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Email Reg Form</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"</script>
	<script type="text/javascript">
	jQuery(document).ready(function(s) 
	{
		$("#registrationform").validate( 
		{
			rules: 
			{
				name: 
				{
					required: true,
					minlength: 4,
				},
				email:
				{
					required: true,
					email: true,
				}
			}
		},
		messages:
		{
			name:
			{
				required: "Please enter your full name",
				minlength: "Too short to be a full name!"
			},
			email:
			{
				required: "Please enter your email address",
				email: "Invalid email address entered!"
			}
		}
				
				
	});
	</script>

	<body>
		
		<div class="container">
		<h1>Sign up!</h2>
		<form id="contactform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" novalidate>
			<?php
			if($sent === true)
			{
				echo "<h2 class='success'>Thanks, you are now registered.</h2>";
			}
			elseif($hasError === true)
			{
				echo '<ul class="errorlist">';
				foreach($errorArray as $key => $val
				{
					echo "<li>" . ucfirst($key) . " field error - $val</li>";
				}
			}
			?>
			<input type="text" name="name" value="<?php echo (isset($name) ? $name : ""); ?> placeholder="Your fullname">
			<input type="email" name="email" value="<?php echo (isset($email) ? $name : ""); ?> placeholder="Your email">
			<input type="submit" name="submitform" value="Submit">
		</form>
		</div>
	</body>
	
</html>