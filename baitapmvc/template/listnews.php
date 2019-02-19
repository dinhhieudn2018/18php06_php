<!DOCTYPE html>
<html>
<head>
	<title>List post in blog</title>
	<style type="text/css">
		img.thumbnail {
		    float: left;
		    width: 250px;
		    height: 200px;
		    margin-right: 15px;
		}
		.item-post {
    		clear: both;
    	}
    	a{
    		text-decoration: none;
    		color: blue;
    	}
	</style>
</head>
<body>
	<h2>List news</h2>
	<?php foreach ($posts as $post ) : ?>
		<div class="item-post">
			<img class="thumbnail" src="<?php echo $post['url_thumbnail'] ?>">
			<h2><?php echo $post['title'] ?></h2>
			<p><?php echo $post['content'] ?></p>
			<p><?php echo $post['time'] ?></p>
			<p><?php echo $post['tag'] ?></p>
			<p><a href="?action=addpost">Add Post</a> | <a href="?action=edit?id=<?php echo $post['id']?>">Edit Post</a></p>
		</div>
		
	<?php endforeach; ?>
	 
</body>
</html>