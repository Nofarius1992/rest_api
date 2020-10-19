<?php
/*
    1. Придумать логику добавление продуктов - done
    2. Сделать структуру базы данных (идентификатор продукта, время, адрес электронной почты клиента, название продукта, цену продукта) - done
    3. Сделать добавление в базу данных заказа JSON - done
    4. Показывать сделанный заказ на странице JSON
    5. Сделать экспорт в файл CSV (идентификатор продукта, время, адрес электронной почты клиента, название продукта, цену продукта)
*/
include $_SERVER['DOCUMENT_ROOT'] . "/db.php";

$sql = "select * from products where name like '" . $_POST['name'] . "'";
$result = mysqli_query($connect, $sql);
$check_name = mysqli_num_rows($result);

// Добавляем заказ в базу данных

if($_POST['email'] !== '' && $_POST['name'] !== '' && $_POST['price_order'] !== '') {
    if($check_name > 0) {
        $sql = "INSERT INTO orders (email, price_order, name) VALUES ('" . $_POST['email'] . "', '" . $_POST['price_order'] . "', '" . $_POST['name'] . "')";
        if($connect->query($sql)) {
            echo "1"; // если Заказ оформлен
        } else {
            echo "2"; // Если Ошибка, попробуйте ещё раз
        };
    } else {
        echo "4"; // Если Такого товара нет в продаже
    }
    
} else {
    echo '3'; // Если не все поля заполнены
}

