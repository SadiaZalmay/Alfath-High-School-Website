
<?php 
include("config.php"); 
	if(isset($_POST['register'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
		if(!empty($fname) && !empty($lname) && !empty($gender) && !empty($email) && !empty($contact) && !empty($username) && !empty($password)) {
			$query = "INSERT INTO member(fname , lname , gender, email , contact , username, password) VALUES('$fname' , '$lname', '$gender' , '$email' , '$contact' , '$username' , '$password')";
				if($result = mysql_query($query)) {
					echo '<p class = "well" >Form successfully inserted.</p>';
				}
				else {
					echo 'Faild!..' . mysql_error();
				}
		}
		
		else {
			echo 'You must sypply a username and password.';
		}
		
	}
?>
<!DOCTYPE HTML>
<head>
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
</head>
<div class = "col-md-6">
<form action "#" method = "post" class = "form-horzintal">
	<label>  Firstname:  </label> <input type = "text" name = "fname" class = "form-control" required>
	<label> Lastname:  </label> <input type = "text" name = "lname" class = "form-control">
		<label> Gender : </label></br>
			<select name = "gender"class = "form-control" >
				<option> Male </option>
				<option> Female </option>
			</select>
	 Email:<input type = "Email" name = "email" class = "form-control" required>
	<label> Contact Number:  </label> <input type = "number" name = "contact" class = "form-control">
	<label> Username:  </label> <input type = "text" name = "username" class = "form-control">
	<label> Password:  </label> <input type = "password" name = "password" class = "form-control">
	</br><input type = "submit"  name = "register" value = "Register" class = "btn btn-primary">
</form>
</div>

<div class = "col-md-6">
	
</div>