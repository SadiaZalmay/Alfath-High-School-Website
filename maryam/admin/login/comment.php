<?php
include('header.php');
include('config.php');
	if(isset($_POST['post'])){
		$name    = $_POST['name'];
		$comment = $_POST['comment'];
		 $pic = "images/". $_FILES['image']['name'];
		  move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);
			if(!empty($name) && !empty($comment)){
				$sql = "INSERT INTO comments(comment_id, name, comment, image) VALUES('','$name', '$comment','$pic')";
					if(mysql_query($sql)){
						echo "<p class = 'alert alert-success'>Your comment has been sent to server.></p>";
					}
					else {
						echo "<p class = 'alert alert-danger'>Failed..></p>";
					}
					
			}
			else {
				echo "<p class = 'alert alert-danger'>All field required..></p>";
			}
	}

?>


<?php
	$sql2 = 'SELECT * FROM comments ORDER BY comment_id DESC LIMIT 5';
		$result = mysql_query($sql2);
			while($row = mysql_fetch_array($result)){
		
		?>
		<div class = "table table-hover col-md-12 ">
			<table class = "table table-hover col-md-12">
				<tr><td><img style = "width:45px;height:45px; border-radius:360px;" src = "<?php echo $row['image'];  ?>">&nbsp;
				<b><?php echo $row['name']; ?></b> </td>
				</tr>
				<td style = "text-align:justify;" > <?php echo $row['comment']; ?></td>
				<td><img style = "width:455px;height:300px;" src = " <?php echo $row['image']; ?>"> </td>
			
				
			</table>
		</div>
		
		<?php
	}
	?>

		