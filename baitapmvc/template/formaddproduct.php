<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
</head>
<body>
	<h2>Add Product</h2>
	<form action="?action=doAddproduct" method="POST">
		Title:<br> <input type="text" name="title">
		<br>
		
		Image:<br>
		<input type="text" name="image">
		<br>
		<input type="submit" name="addproduct" value="Add">
	</form>
</body>
</html>