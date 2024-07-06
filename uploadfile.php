<?php
if(isset($_POST['submit'])){
	$name=$_FILES['choose']['name'];
	$size=$_FILES['choose']['size'];
	$type=$_FILES['choose']['type'];
	$tmp_name=$_FILES['choose']['tmp_name'];
	$file_size=$size/1024;
	$ext=substr($name,strpos($name,".")+1);
	if(!empty($name))
	{
		if($ext == 'pdf' && $file_size<=2048
				|| $ext == 'jpeg' && $file_size<=500){
				
				if(move_uploaded_file($tmp_name, 'upload/'.$name)){
					echo "File successfully Uploaded..";
				}
				else {
					echo "An error occured while uploading file";
				}
				}
				else {
					echo "File must be pdf/jpeg ,<=2048kb,<=500KB";
				}
			}
	else
		echo"Please choose a file";
}
?>
<form method = "post" action="#" enctype="multipart/form-data">
Choose Your file.. <input type="file" name="choose">
				   <input type="submit" name="submit" value="upload">
</form>

