<?php
	class PostModel{
		public function GetPost(){
			$con = mysqli_connect('localhost','root','','18php06_mvc');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			$result = $con->query('SELECT * FROM mvc_post');

			$posts = array();
			if($result->num_rows>0){
				while ($post = mysqli_fetch_assoc($result)) {
					$posts[] = $post;
				}
			}
			return $posts;
		}
		public function addPost($post){
			$con = mysqli_connect('localhost','root','','18php06_mvc');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			$time = date('Y-m-d H:i:s');
			$sql = "INSERT INTO `mvc_post` (`id`, `title`, `content`, `time`, `url_thumbnail`, `tag`) VALUES (NULL, '". $post['title'] ."', '". $post['content'] ."', '". $time ."', '". $post['url_thumbnail'] ."', '". $post['tag'] ."');";
			$kq= $con->query($sql);
			return $kq;
		}
		public function editPost($post){
			$con = mysqli_connect('localhost','root','','18php06_mvc');
			mysqli_set_charset($con,'utf8');
			if (mysqli_connect_errno()){
				echo "Connect error". mysqli_connect_error();
			}
			
			$sqledit = "UPDATE  mvc_post SET title = '$title', content = '$content', url_thumbnail = '$url_thumbnail', tag = '$tag' WHERE id = $id";
			$kqedit = $con->query($sqledit);
			return $kqedit;
		}

	}
?>