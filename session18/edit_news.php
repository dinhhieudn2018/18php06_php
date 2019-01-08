<!DOCTYPE html>
<html>
<head>
	<title>Edit news</title>
	<style type="text/css">
		img {
			width: 150px;
		}
	</style>
</head>
<body>
	<?php include 'connect_db.php';?>
	<?php 
		$id = $_GET['idEdit'];
		
		$sql = "SELECT * FROM news WHERE id = $id";
		$oldNewsEdit = mysqli_query($conn, $sql);
		$oldNews     = $oldNewsEdit->fetch_assoc();
		$title       = $oldNews['title'];
		$description = $oldNews['description'];
		$content     = $oldNews['content'];
		$imageName   = $oldNews['image'];
		$created     = $oldNews['created'];
      	$updated     = $oldNews['updated'];
		if (isset($_POST['edit_news'])) {
			$title        = $_POST['title'];
			$description  = $_POST['description'];
			$content      = $_POST['content'];
			$created      = $_POST['created'];
      		$updated      = $_POST['updated'];
			if (!$_FILES['image']['error']) {
				// xu ly upload anh
				$image = $_FILES['image'];
				$imageName   = uniqid().'_'.$image['title'];
				$targetUpload = 'uploads/'.$imageName;
				move_uploaded_file($image['tmp_name'], $targetUpload);
			// ket thuc xu ly upload anh
			}
			$sql = "UPDATE news SET title = '$title', description = '$description', content = '$content',  image = '$imageName', created = '$created', updated = '$updated' WHERE id = $id";
			if (mysqli_query($conn, $sql) === TRUE) {
				header("Location: list_news.php");
			}
		}
	?>
	<h1>Edit news</h1>
	<form action="" method="POST" enctype="multipart/form-data">
    <p>News title: <input type="text" name="title" placeholder="Please input news title" value="<?php echo $title ?>"></p>
    <p>News description: <textarea name="description" rows="10" cols="30"><?php echo $description ?></textarea></p>
    <p>News content: <input type="text" name="content" placeholder="Please input news content" value="<?php echo $content ?>"></p>
    <p>News image: <input type="file" name="image"></p>
    <img src="uploads/<?php echo $imageName?>">
    <p>News create: <input type="datetime-local" name="created"></p>  
    <p>News update: <input type="datetime-local" name="updated"></p>
    <p><input type="submit" name="edit_news" value="Edit news"></p>
  </form>
</body>
</html>