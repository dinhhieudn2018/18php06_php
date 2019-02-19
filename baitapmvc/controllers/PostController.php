<?php
	class PostController{
		public function GetPost(){
			include ('models/PostModel.php');
			$postModel = new PostModel();
			$posts = $postModel->GetPost();

			include ('views/PostView.php');
			$postView = new PostView();
			$postView->ShowAllPost($posts);	
		}

		public function addPost(){
			include ('views/PostView.php');
			$postView = new PostView();
			$postView->FormAddPost();
		}
		public function doAddnews(){
			$title        = $_POST['title'];
			$content      = $_POST['content'];
			$urlThumbnail = $_POST['url_thumbnail'];
			$tag          = $_POST['tag'];

			$post = array(
				'title'        => $title,
				'content'      => $content,
				'url_thumbnail'=> $urlThumbnail,
				'tag'          => $tag,
			);
			// echo $title."<br>";
			// echo $content."<br>";
			// echo $urlThumbnail."<br>";
			// echo $tag."<br>";
			include ('models/PostModel.php');
			$postModel = new PostModel();
			$status = $postModel->addPost($post);
			include ('views/PostView.php');
			$postView = new PostView();
			$postView->notifyAddPost($status);
		}
		public function editPost(){
			include ('views/PostView.php');
			$postView = new PostView();
			$postView->FormEditPost();
		}
		public function doEdit(){
			$title        = $_POST['title'];
			$content      = $_POST['content'];
			$urlThumbnail = $_POST['url_thumbnail'];
			$tag          = $_POST['tag'];

			$post = array(
				'title'        => $title,
				'content'      => $content,
				'url_thumbnail'=> $urlThumbnail,
				'tag'          => $tag,
			);
			include ('models/PostModel.php');
			$postModel = new PostModel();
			$posts = $postModel->editPost($post);
			include ('views/PostView.php');
			$postView = new PostView();
			$postView->notifyAddPost($status);
	}
}
?>