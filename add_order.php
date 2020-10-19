<?php
/*
    1. Придумать логику добавление продуктов - done
    2. Сделать структуру базы данных (идентификатор продукта, время, адрес электронной почты клиента, название продукта, цену продукта) - done
    3. Сделать добавление в базу данных заказа JSON - done
    4. Показывать сделанный заказ на странице JSON
    5. Сделать экспорт в файл CSV (идентификатор продукта, время, адрес электронной почты клиента, название продукта, цену продукта)
*/
include $_SERVER['DOCUMENT_ROOT'] . "/db.php";

// Добавляем заказ в базу данных
if($_POST['email'] !== '' && $_POST['name'] !== '' && $_POST['price_order'] !== '') {
    $sql = "SELECT * FROM products";
    $sql = "INSERT INTO orders (email, price_order, name) VALUES ('" . $_POST['email'] . "', '" . $_POST['price_order'] . "', '" . $_POST['name'] . "')";
    if($connect->query($sql)) {
        echo "1";
    } else {
        echo "2";
    };
} else {
    echo '3';
}