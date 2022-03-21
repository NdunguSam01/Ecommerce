<?php
include_once("../Code/dbConfig.php");

if(isset($_SESSION["admin"]))
{
    if(time()-$_SESSION["login_time_stamp"] >600) 
    {
    	echo '<script>alert("Session expired. Please log in again")</script>';
        session_unset();
        session_destroy();
        header("Location:Login.php");
    }
}

if (isset($_POST['upload'])) 
{
	$image=$_FILES['image']['name'];
	$pname=mysqli_real_escape_string($con,$_POST['description']);
	$price=mysqli_real_escape_string($con,$_POST['price']);
	$choice=$_POST['choice'];

	$target="../Uploads/".basename($image);

	$sql="INSERT INTO products (image,description,price,category) VALUES ('$image','$pname','$price','$choice')";

	mysqli_query($con,$sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
	{
		echo '<script>alert("Product added successully!")</script>';
		echo '<script>window.location="Items.php"</script>';
		//header("Location:Items.php");
	}
	else
	{
		echo '<script>alert("Upload not successful!")</script>';
		echo '<script>window.location="Items.php"</script>';
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Items</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../CSS/Items.css">
</head>
<body background="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvcftdRUFw0N1sXA3_ATmLU8-EsQ8h8nXg0w&usqp=CAU">
	<div id="content">
		<form method="post" action="Items.php" enctype="multipart/form-data">
			<h1>New Item</h1>
		<div>
			<input type="file" name="image" required>
		</div>
		<div>
			<textarea name="description" cols="40" rows="4" placeholder="Item description" required></textarea>
		</div>
		<div>
			<textarea name="price" placeholder="Item Price" required></textarea>
		</div>
		<br>
		<div>
			<label for="choice">Category: </label>
		</div>
		<div class="choices">
			<select name="choice" id="choice">
				<optgroup label="Play Station 3">
					<option value="ps3controller">Play Station 3 Controller</option>
					<option value="ps3console">Play Station 3 Console</option>
					<option value="ps3game">Play Station 3 Games</option>
				</optgroup>
				<optgroup label="Play Station 4">
					<option value="ps4controller">Play Station 4 Controller</option>
					<option value="ps4console">Play Station 4 Console</option>
					<option value="ps4game">Play Station 4 Games</option>
				</optgroup>
				<optgroup label="Play Station 5">
					<option value="ps5controller">Play Station 5 Controller</option>
					<option value="ps5console">Play Station 5 Console</option>
					<option value="ps5game">Play Station 5 Games</option>
				</optgroup>
				<optgroup label="X Box Series S">
					<option value="seriesscontroller">X Box Series S Controller</option>
					<option value="seriessconsole">X Box Series S Console</option>
					<option value="seriessgame">X Box Series S Games</option>
				</optgroup>
				<optgroup label="X Box Series S Bundle">
					<option value="seriessbcontroller">X Box Series S Bundle Controller</option>
					<option value="seriessbconsole">X Box Series S Bundle Console</option>
					<option value="seriessbgame">X Box Series S Bundle Games</option>
				</optgroup>
				<optgroup label="X Box Series X">
					<option value="seriesxcontroller">X Box Series X Controller</option>
					<option value="seriesxconsole">X Box Series X Console</option>
					<option value="seriesxgame">X Box Series X Games</option>
				</optgroup>
				<optgroup label="Nintendo DS">
					<option value="ndsc">Nintendo DS Controller</option>
					<option value="ndsa">Nintendo DS Accessories</option>
				</optgroup>
				<optgroup label="Nintendo 3DS">
					<option value="n3dsa">Nintendo 3DS Accessories</option>
					<option value="n3dsc">Nintendo 3DS Consoles</option>
					<option value="n3dsg">Nintendo 3DS Games</option>
				</optgroup>
				<optgroup label="Wii">
					<option value="wiia">Wii Accessories</option>
					<option value="wiic">Wii Consoles</option>
					<option value="wiig">Wii Games</option>
				</optgroup>
				<optgroup label="PC Games">
					<option value="pcg">PC Games</option>
				</optgroup>
			</select>
		</div>
		<div>
			<br><input type="submit" name="upload" value="Upload Item" onclick="return confirm('Upload item?')">
		</div>
		<br><a href="../index.php">Home</a>
		</form>
</body>
</html>