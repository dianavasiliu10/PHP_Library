<?php include('reset_password.php'); ?>

<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="UTF-8">
	<title>Resetare parola</title>
	<link rel="stylesheet" href="../../css/pw_reset.css">
</head>

<body>
	<form class="login-form" action="enter_email.php" method="post">
    <h2 class="form-title">Reseteaza parola</h2>
    
		<!-- form validation messages -->
    <?php include('messages.php'); ?>
    
		<div class="form-group">
			<label>Adresa de email</label>
			<input type="email" name="email">
    </div>
    
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
    </div>
    
  </form>
  
</body>
</html>