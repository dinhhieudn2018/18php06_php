<?php  
	$localhost = 'localhost';

	$username ='root';

	$password = '';

	$database = '18php06' ;
	
	$connect = new mysqli ($localhost , $username , $password , $database);
	
	mysqli_set_charset($connect,"utf8");
	
	// kiểm tra kết nối 
	
	if (mysqli_connect_errno()){
		echo 'Có lỗi khi kết nối database: '. $mysqli_connect_error();
		
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Register</title>
	<meta charset="utf-8">
	<style type="text/css">
		span {
			color: red;
		}
	</style>
</head>
<body>
	<?php 
	$errName = $errUsername = $errPass = $errGender = $errCity = '';
	$name = $username = $password = $gender = $city = '';
	if(isset($_POST['register'])) {
		$name     = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$gender   = isset($_POST['gender'])?$_POST['gender']:'';
		$city     = isset($_POST['city'])?$_POST['city']:'';

		

		if($name == '') {
			$errName = 'Please input your name';
		}
		if($username == '') {
			$errUsername = 'Please input your username';
		}
		if($password == '') {
			$errPass = 'Please input your password';
		}
		if($gender == '') {
			$errGender = 'Please choose gender';
		}
		if($city == ''){
			$errCity = 'Please choose city';
		}

		

		
		$query = " INSERT INTO table_user (username,password , name , gender , thanhpho) 
		VALUES('$username','$password' ,'$name', '$gender' , '$city')";
    	$result = mysqli_query($connect, $query);
		

	} 	
	?>
	<h1>Register form</h1>
	<form action="" method="POST">
		<p>Name:<input type="text" name="name" 
		value="<?php echo $name?>">
			<span><?php echo $errName;?></span>
		</p>
		<p>Gender: 
			<input type="radio" name="gender" value="Male" 
			<?php if($gender == 'male'){echo "checked";}?>>Male
			<input type="radio" name="gender" value="Female" 
			<?php if($gender == 'female'){echo "checked";}?>>Female
			<span><?php echo $errGender;?></span>
		</p>
		<p>
		<select name="city">
			<option value="">Choose city</option>
			<option value="Hà Nội">Hà Nội</option>
			<option value="Đà Nẵng">Đà Nẵng</option>
			<option value="TP HCM">TP HCM</option>
		</select>
			<span><?php echo $errCity;?></span>
		</p>
		<p>Username:<input type="text" name="username"
		value="<?php echo $username?>">
			<span><?php echo $errUsername;?></span>
		</p>
		<p>Password:<input type="password" name="password"
		value="<?php echo $password?>">
			<span><?php echo $errPass;?></span>
		</p>
		<input type="submit" name="register" value="Register">
	</form>
</body>
</html>