	
		<div class="card">
			<h5 class="card-title">
				<!-- Посылаем гет запрос id -->
				<a href="product.php?id=<?php echo $row["id"] ?>">
					<?php echo $row["title"] ?>
				</a>
			</h5>
			<p class="card-text"><?php echo $row["description"] ?></p>
			<button class="btn btn-primary" onclick="addToBasket(this)" data-id="<?php echo $row["id"] ?>">
				В корзину
			</button>
		</div>