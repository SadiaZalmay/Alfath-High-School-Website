<?php
session_start();
ob_start();
	include("config.php");
	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if(!empty($username) && !empty($password)) {
			$query = "SELECT mem_id from member WHERE username = '$username' && password = '$password'";
				$query_run = mysql_query($query);
					 $query_num_row = mysql_num_rows($query_run);
						if($query_num_row == 0) {
						echo "<p class = 'invalid'>You entered invalid username and password.</p>";
				}
				else if($query_num_row == 1) {
						$mem_id = mysql_result($query_run,0,'mem_id');
						$_SESSION['user_id'] = $mem_id;
					  header("Location:profile.php");

				}

		}
		else {
			echo "You must enter username/password!.";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
</head>

<body>
</br></br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form"action = "#" method = "post" >
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text"title="Enter your " autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type = "submit" class="btn btn-md btn-success btn-block" value = "Login">
								<a href = "forgotpass.php"><center>Forgot your password?</center></a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
