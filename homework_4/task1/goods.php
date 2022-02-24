<?php
$goods = require_once 'items-data.php';


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>homework_4</title>
</head>
<body>
<main>
    <? foreach ($goods as $good): ?>
    <div>
        <h2><?= $good['title'] ?></h2>
        <p>Стоимость: <?= $good['price'] ?> р.</p>
        <img src="images/<?=$good['image'] ?>" alt="<?= $good['image'] ?>" style="max-width: 400px">
        <? if ($good['count'] > 0): ?>
            <a href="item.php?id=<?= $good['id'] ?>">Подробнее</a>
        <?else : ?>
            <span>Товар закончился</span>
        <? endif; ?>
    </div>
    <? endforeach; ?>
</main>

</body>
</html>