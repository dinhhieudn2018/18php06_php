<?php
	class ProductController{
		public function GetProduct(){
			include ('models/ProductModel.php');
			$productModel = new ProductModel();
			$products = $productModel->GetProduct();

			include ('views/ProductView.php');
			$productView = new ProductView();
			$productView->ShowAllProduct($products);	
		}

		public function addProduct(){
			include ('views/ProductView.php');
			$productView = new ProductView();
			$productView->FormAddProduct();
		}
		public function doAddproduct(){
			$title = $_POST['title'];
			$image = $_POST['image'];
			
			$product = array(
				'title'  => $title,
				'image'  => $image,	
			);
			
			include ('models/ProductModel.php');
			$productModel = new ProductModel();
			$status = $productModel->addProduct($product);
			include ('views/ProductView.php');
			$productView = new ProductView();
			$productView->notifyAddProduct($status);
		}
		public function deleteProduct(){
			
		}

	}
?>