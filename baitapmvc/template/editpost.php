<!DOCTYPE html>
<html>
<head>
	<title>Edit post</title>
</head>
<body>
	<h2>Edit Post</h2>
	<form action="?action=doEdit" method="POST">
		Title:<br> <input type="text" name="title">
		<br>
		Content:<br> <textarea name="content" cols="50" rows="10"></textarea>
		<br>
		Image:<br>
		<input type="text" name="url_thumbnail">
		<br>
		Tag:<br>
		<input type="text" name="tag">
		<br>
		<input type="submit" name="edit" value="Edit">
	</form>
</body>
</html>