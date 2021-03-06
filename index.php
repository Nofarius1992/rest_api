<?php 
	include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
	$sql = "SELECT * FROM products";
	$result = $connect->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title>REST_API</title>
</head>
<body>

	<h1>Магазин товаров</h1>
	<section class="products">
        <?php
            include 'product_card.php';
        ?>
	 </section>
	 <section class="order">
	 	<h2>Сделайте заказ</h2>
	 	<form id="form_order" action="add_order.php" method="POST">
	        <label class="input" for="email"> Email:
	            <input id="email" name="email" type="email" placeholder="You email">
	        </label>
	        <label class="input" for="name"> Name:
	            <input id="name" name="name" type="text" placeholder="Name product">
	        </label>
	        <label class="input" for="price"> Price: 
	            <input id="price" name="price_order" type="text" placeholder="Price USD">
	        </label>
	        <button type="submit">to Order</button>
    	</form>
	 </section>

	 <section class="parser">
	 	<h3>Получите файл с заказами</h3>
	 	<form id="form_parser" action="parser_order.php" method="POST">
	 		<label class="input" for="order_email">
	 			<input id="order_email" name="order_email" type="text" placeholder="email">
	 		</label>
	 		<button id="click_form_parser" type="submit">Parser order</button>
	 	</form>
	 </section>
    


<script src="main.js"></script>
</body>
</html>