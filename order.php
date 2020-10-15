<?php 
	include $_SERVER['DOCUMENT_ROOT'] . "/db.php";
	if(isset($_POST['order_email']) && $_POST['order_email'] !== '') {
		$sql = "SELECT * FROM `orders` WHERE `email` LIKE 'admin@i.ua'";
		$result = mysqli_query($connect, $sql);
		$col_orders = mysqli_num_rows($result);
		$i = 0;
		while($i < $col_orders) {
			?>
				<ul>
					<!-- Выводим данные заказа указанному пользователю -->
					<?php

					?>
					<li>
						<h4>
							<?php echo  ?>
						</h4>
					</li>
				</ul>
			<?php
			$i = $i + 1;
		}
	} else {
		echo 'Укажите email пользователя';
		echo "<a href="/">Назад</a>";
	}
	
 ?>