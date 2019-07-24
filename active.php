<!DOCTYPE HTML>  
<html>
	<body>
		<?php
				$emailErr=$password1Err=$password2Err=$password2Err=$password2Err1="";
				$email = $password1 = $password2 ="";
				if($_SERVER["REQUEST_METHOD"]=="GET"){
					if(empty($_GET["email"])){$emailErr="Email is required";}
					else {$email = test_input($_GET["email"]);}
					if(empty($_GET["password_1"])){$password1Err="Password is required";}
					else {$password1 = test_input($_GET["password_1"]);}
					if(empty($_GET["password_2"])){$passwordErr="Password confirmation is required";
					if(levenshtein($password1,$password2)!=0){
							$password2Err1= "2 pass ko giống nhau";
							
								}}
					else {$password2 = test_input($_GET["password_2"]);}
					
					
				}
				function test_input($data){
					$data = trim($data);
					$data = stripcslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
			?>
		<h2> Đăng ký</h2>
		<form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		E-mail: <input type = "email" name = "email" value = "Your E-mail"> 
		
		<span class = "error" > <?php   echo $emailErr;?></span>
		
		<br><br>
		Password: <input type = "password" name = "password_1" value = "Password"> 
		<span class = "error" > <?php   echo $password1Err;?></span>
		<br><br>
		Password confirmation: <input type = "password" name = "password_2" value="Password" > 
		<span class = "error" > <?php   echo $password2Err; echo $password2Err1;
			?></span>
		<br><br>
		<input type="submit" value = "Sign in"><br><br>
		<?php
			
				
				echo"<h2>Show</h2>";
			
			if(levenshtein($password1,$password2)!=0){
				return;
			}
			else{
				echo $email ;
				echo "<br>";
				echo $password1;
				echo "<br>";
				echo $password2;}
			
			
		?>
		
		
	<body>
</html>