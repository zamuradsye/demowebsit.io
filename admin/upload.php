<?php
include'db.php';
session_start();

if(isset($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $username = $_POST['username'];
    $price = $_POST['price'];
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded by ".$username." for ".$price." dollars.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>File Upload System</title>
	<style>
		/* CSS for linear gradient colors */
		body {
			background: linear-gradient(to bottom, #FF0000, #000000);
            background-repeat: no-repeat;
		}
		.upload-form {
			background: #FFFFFF;
			margin: 50px auto;
			padding: 20px;
			width: 50%;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="upload-form">
		<a a href="../index.html"><h1 style="text-decoration:none;">File Upload System</h1></a>
		<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="username">Username:</label><br>
    <input type="text" name="username" required><br><br>
    <label for="file">Select file to upload:</label><br>
    <input type="file" name="file"><br><br>
    <label for="price">Price:</label><br>
    <input type="number" name="price" min="0" step="0.01" required><br><br>
    <input type="submit" value="Upload" name="submit">
</form>

	</div>
</body>
</html>

