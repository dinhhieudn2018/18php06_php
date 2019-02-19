<?php
	class ProductView{
		public function ShowAllProduct($products){
			include ('template/listproduct.php');
		}
		public function FormAddProduct(){
			include ('template/formaddproduct.php');
		}
		public function notifyAddProduct($status){
			if($status){
				echo 'Add success, <a href="home.php">Click here to back home</a>';
			}
			else{
				echo "Add fail, click";
			}

		}
		
	}
?>