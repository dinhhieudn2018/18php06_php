<!DOCTYPE html>
<html>
<head>
	<title>List product</title>
	<style type="text/css">
		img.image {
		    
		    width: 40px;
		    height: 40px;
		    
		}
		.item-product {
    		clear: both;
    	}
    	table {
	      border-collapse: collapse;
	      width: 40%;
	      margin: 0 auto;
	      text-align: center;
	    }
	    table, th, td {
	      border: 1px solid gray;
	    }
	    h2{
	    	text-align: center;
	    	font-size: 30px;
	    	
	    }
	    a{
	    	list-style-type: none;
	    	color: blue;
	    	text-decoration: none;
	    }
	</style>
</head>
<body>
	<h2>List product</h2>
	<?php foreach ($products as $product ) : ?>
		<div class="item-product">
		<table>
		<tr>
          	<td><?php echo $product['id']; ?></td>
	        <td><?php echo $product['title'] ?></td>
	        <td><img class="image" src="<?php echo $product['image'] ?>"></td>
	        <td>
	        <a href="?action=addproduct">ADD</a> |
	        <a href="">EDIT</a> 
	            | <a href="">DELETE</a> 

	        </td>
        </tr>
		</table>		
		</div>
		
	<?php endforeach; ?>
	 
</body>
</html>