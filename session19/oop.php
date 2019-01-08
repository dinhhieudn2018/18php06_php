<?php 
	class User {
		public $name;
		public $email;
		public $password;
		public $phone;
		public $address;

		private function addUser(){
			echo "add";
		}
		public function editUser(){
			echo "edit";
		}
		public function registerUser(){
			echo "register";
		}
		public function loginUser(){
			echo "login";
		}
		public function viewUser(){
			echo "view";
		}
		private function listUser(){
			echo "list";
		}
	}
	
	class Customer extends User{
		public $IDcustomer;
		public $deliveryaddress;

		public function pay(){
			echo "pay";
		}
		public function purchaseHistory(){
			echo "history";
		}
	}
	$Customer = new Customer();
	$Customer->registerUser();
	echo "<br>";
	$Customer->pay();

?>