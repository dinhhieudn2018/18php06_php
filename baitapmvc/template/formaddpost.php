<!DOCTYPE html>
<html>
<head>
	<title>Add Post</title>
</head>
<body>
	<h2>Add Post</h2>
	<form action="?action=doAddnews" method="POST">
		Title:<br> <input type="text" name="title">
		<br>
		Content:<br> <textarea name="content" cols="50" rows="10"></textarea>
		<br>
		Url image:<br>
		<input type="text" name="url_thumbnail">
		<br>
		Tag:<br>
		<input type="text" name="tag">
		<br>
		<input type="submit" name="addpost" value="Add">
	</form>
</body>
</html>