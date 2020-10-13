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
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<div class="wrapper_card">
					<h2 class="card-title">
							<?php echo $row["name"] ?>
					</h2>
					<p class="card-text"><?php echo $row["price"] ?></p>
				</div>
			<?php
		}
		 ?>
	 </section>

    <form id="form_order" method="POST">
        <label class="input" for="email"> Email:
            <input id="email" name="email" type="email" placeholder="You email">
        </label>
        <label class="input" for="name"> Name:
            <input id="name" name="name" type="text" placeholder="Name product">
        </label>
        <label class="input" for="price"> Price: 
            <input id="price" name="price" type="text" placeholder="Price USD">
        </label>
        <button type="submit">to Order</button>
    </form>


<script src="main.js"></script>
</body>
</html>