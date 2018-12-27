<!DOCTYPE html>
<html>
<head>
	<title>Edit product</title>
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
		// Lay thong tin cu cua san pham can edit theo ID
		$sql = "SELECT * FROM products WHERE id = $id";
		$oldProductEdit = mysqli_query($conn, $sql);
		$oldProduct = $oldProductEdit->fetch_assoc();
		$name        = $oldProduct['name'];
		$description = $oldProduct['description'];
		$price       = $oldProduct['price'];
		$amount      = $oldProduct['amount'];
		$imageName   = $oldProduct['image'];
		$created     = $oldProduct['created'];
      	$updated     = $oldProduct['updated'];
		if (isset($_POST['edit_product'])) {
			$name        = $_POST['name'];
			$description = $_POST['description'];
			$price       = $_POST['price'];
			$amount      = $_POST['amount'];
			$created     = $_POST['created'];
      		$updated     = $_POST['updated'];
			if (!$_FILES['image']['error']) {
				// xu ly upload anh
				$image = $_FILES['image'];
				$imageName   = uniqid().'_'.$image['name'];
				$targetUpload = 'uploads/'.$imageName;
				move_uploaded_file($image['tmp_name'], $targetUpload);
			// ket thuc xu ly upload anh
			}
			$sql = "UPDATE products SET name = '$name', description = '$description', price = $price, amount = $amount, image = '$imageName', created = '$created', updated = '$updated' WHERE id = $id";
			if (mysqli_query($conn, $sql) === TRUE) {
				header("Location: list_product.php");
			}
		}
	?>
	<h1>Edit product</h1>
	<form action="#" method="POST" enctype="multipart/form-data">
		<p>Product name: <input type="text" name="name" placeholder="Please input product name" value="<?php echo $name?>"></p>
		<p>Product description: <textarea name="description" rows="10" cols="30"><?php echo $description?></textarea></p>
		<p>Product price: <input type="text" name="price" placeholder="Please input product price" value="<?php echo $price?>"></p>
		<p>Product image: <input type="file" name="image"></p>
		<img src="uploads/<?php echo $imageName?>">
		<p>Product amount: <input type="text" name="amount" placeholder="Please input product amount" value="<?php echo $amount ?>"></p>
    	<p>Product created: <input type="date" name="created" value="<?php echo $created ?>"></p>  
    	<p>Product update: <input type="date" name="updated" value="<?php echo $updated ?>"></p>
		<p><input type="submit" name="edit_product" value="Edit product"></p>
	</form>
</body>
</html>