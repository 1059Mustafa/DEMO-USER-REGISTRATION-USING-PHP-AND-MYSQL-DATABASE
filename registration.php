<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>title>
</head>
<body>
	
	<div class="container">

		<div class="header">

			<h2>Register<h2>

		</div>

		<form action="registration.php" method="post">
			

       		<div>
       			
       			<label for="username">Username</label>
       			<input type="text" name="username" required>

       		</div>

			<div>
       			
       			<label for="email">Email</label>
       			<input type="email" name="email" required>
       		
       		</div>

			<div>
       			
       			<label for="password">Password</label>
       			<input type="password" name="password_1" required>

       		</div>

       		<div>
       			
       			<label for="password">Confirm_Password</label>
       			<input type="password" name="password_2" required>
       		
       		</div>

       		<button type="submit"> Submit </button>

       		<p>Already a user?<a href="login.php>"><b>Log in</b></a></p>


		</form>

	</div>
	
</body>	
</html>