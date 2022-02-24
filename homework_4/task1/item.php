<?php

$get = $_GET;
$id = $get['id'];

if (!isset($id)) {
    echo $id;
}

function getItem(int $id) {
    $items = require_once 'items-data.php';
    foreach ($items as $item){
        if ($id === $item['id']) return $item;
    }
}

$item = getItem($id);
if (!isset($item)) {
    echo $item;
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Информация о товаре</title>
</head>
<body>
<main>
    <div style="max-width: 600px">
        <h2><?= $item['title'] ?></h2>
        <p>Количество: <?= $item['count'] ?> шт.</p>
        <p>Стоимость: <?= $item['price']?> руб.</p>
        <p><?= $item['description'] ?></p>
        <div>
            <img src="images/<?= $item['image'] ?>" style="max-width: 600px">
        </div>
        <a href="goods.php">Вернуться к списку товаров</a>
    </div>
</main>
</body>
</html>
