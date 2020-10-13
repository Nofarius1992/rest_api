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
        <ul>
            <li>Orange 100$/kg</li>
            <li>Banana 70$/kg</li>
            <li>Apple 40$/kg</li>
            <li>Strawberry 150$/kg</li>
            <li>Lemon 95$/kg</li>
        </ul>
    </section>

    <form action="add_order.php" method="POST">
        <label>
            <input name="email" type="email" placeholder="You email">
        </label>
        <label>
            <input name="name" type="text" placeholder="Name product">
        </label>
        <label>
            <input name="price" type="text" placeholder="Price USD">
        </label>
        <button type="submit">to Order</button>
    </form>

</body>
</html>