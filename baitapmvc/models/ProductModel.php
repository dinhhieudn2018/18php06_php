<?php
	class ProductModel{
		public function GetProduct(){
			$con = mysqli_connect('localhost','root','','18php06_mvc_oop');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			$result = $con->query('SELECT * FROM products');

			$products = array();
			if($result->num_rows>0){
				while ($product = mysqli_fetch_assoc($result)) {
					$products[] = $product;
				}
			}
			return $products;
		}
		public function addProduct($product){
			$con = mysqli_connect('localhost','root','','18php06_mvc_oop');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			
			$sql = "INSERT INTO `products` (`id`, `title`,  `image`) VALUES (NULL, '". $product['title'] ."', '". $product['image'] ."');";
			$kq= $con->query($sql);
			return $kq;
		}
		public function deleteProduct(){
			$con = mysqli_connect('localhost','root','','18php06_mvc_oop');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			$id = $_GET['id'];
			$sql_delete = "DELETE FROM products WHERE id = $id";
			$rs = $con->query($sql_delete);
			return $rs;
		}
	}
?>