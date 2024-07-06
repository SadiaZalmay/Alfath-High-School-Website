<?php
session_start();
	include('header.php');
?>
	<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
					<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">Design Bootstrap</a>
					</div>
					<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav ">
									<li><a href="#">HOME</a></li>
									<li><a href="../profile.php">TIMELINE</a></li>
									<li><a href="#">SERVICES</a></li>
									<li><a href="#">CONTACT</a></li>
									<li><a href="logout.php">Logout</a></li>
							</ul>
					</div>

			</div>
	</div>
<div class = "alert alert-success well"> You can write something here.. </div>
	<form action  = "#" method = "POST" class = "form-horzintal well col-md-6" enctype = "multipart/form-data">
		<label> Your name:</label> <input type = "text" name = "name" class = "form-control">
		<label> Your Comment: </label> <textarea cols = "65" rows = "5" class = "form-control" name = "comment">
			</textarea>
			<input type = "file" name = "image" class = "btn btn-primary btn-file " >
		</br><input type = "submit" class = "btn btn-primary pull-right" value = "Post your comment" name = "post">

	</form>

<?php
		include ('comment.php');
?>
