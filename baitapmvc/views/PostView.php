<?php
	class PostView{
		public function ShowAllPost($posts){
			include ('template/listnews.php');
		}
		public function FormAddPost(){
			include ('template/formaddpost.php');
		}
		public function notifyAddPost($status){
			if($status){
				echo 'Add success, <a href="home.php">Click here to back home</a>';
			}
			else{
				echo "Add fail, click";
			}

		}
		public function FormEditPost(){
			include ('template/editpost.php');
		}
		
	}
?>