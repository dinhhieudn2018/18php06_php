<?php
	

	include ('controllers/PostController.php');
	$postController = new PostController();
	$action = $_GET['action'];

	if($action == 'listnews'){
		$postController->GetPost();
	}
	if($action == 'addpost'){
		$postController->addPost();
	}
	if($action == 'doAddnews'){
		$postController->doAddnews();
	}
	if($action == 'edit'){
		$postController->editPost();
	}
	if($action == 'doEdit'){
		$postController->doEdit();
	}

	include ('controllers/ProductController.php');
	$productController = new ProductController();
	$action = $_GET['action'];

	if($action == 'listproduct'){
		$productController->GetProduct();
	}
	if($action == 'addproduct'){
		$productController->addProduct();
	}
	if($action == 'doAddproduct'){
		$productController->doAddproduct();
	}
	if($action == 'edit'){
		$productController->editProduct();
	}
	if($action == 'delete'){
		$productController->deleteProduct();
	}
	
?>