<html>
	<body>
			<?php
				class User{
					protected $email;
					protected $password;
				public function getEmail(){
						return $email;
					}
				public function serEmail($email){
						$this->email=$email;
					}	
				public function getPassword(){
						return $password;
					}
				public function setEmail($password){
						$this->password = $password;
					}
				}
				
			
			
			?>
			<?php 
				try {
					$filename = "test.txt";
					$file = fopen($filename , "r");
					//while (!feof($file))  
					
					
					$str = fgets($file);  
							  
							
					 explode(" ",$str);
					
					
							  
					
					
					
					
					fclose($file);
				}
				catch(Exception  $e){echo 'Caught exception: ',  $e->getMessage(), "\n";}
				
			
			
			
			
			?>
			<?php
				$value_email= $value_password="";
				$Message="";
				$emailErr = $passwordErr = "";
				$email = $password = "";
				if($SERVER["REQUEST_METHOD"] = "GET"){
					if(empty($_GET["email"])) { $emailErr = "Username or email is required";}
					else { $email = $_GET["email"];}
					if(empty($_GET["password"])) { $emailErr = "Password is required";}
					else { $password = $_GET["password"];}
					
				}
				if(levenshtein("laduc45@gmail.com",$email) == 0 && levenshtein("laduc123",$password)== 0){
						
						$Message="Succeed";
					}
					if(levenshtein("laduc45@gmail.com",$email) != 0 || levenshtein("laduc123",$password) != 0){
						
						$Message ="Sai username hoặc sai mật khẩu";
					}
						
						
					
			?>
			
			
			
			<h2> Log in </h2>
			<form action= "login.php" method = "get" >
			Username / E-mail: <input type = "email" name = "email"  value =<?php echo $value_email?>>
			<br>
			<br>
			Password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type = "password" name = "password" value = $value_password>
			<br>
			<br>
			<input type = "checkbox" name = "checkbox" value = "yes" > 
			<?php if(!isset($_GET['checkbox'])){
				$value_email=$email;
				$value_password=$password;
			}
			?>
			Keep login      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;           
			<input type = "Submit" value = "Log in" > <?php  
				if(empty($email) && empty($password)){echo "" ; }
				else{echo $Message;}
			?>
			
	</body>	
</html>