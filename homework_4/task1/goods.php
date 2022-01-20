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
        <p><?= $good['price'] ?></p>
        <img src="images/<?=$good['image'] ?>" alt="<?= $good['image'] ?>" style="max-width: 400px">
        <a data-id="<?= $good['id'] ?>" href="goods.php?id=<?= $good['id'] ?>">Подробнее</a>
        <p data-id="no_text"></p>
    </div>
    <? endforeach; ?>
</main>

<script src="js/script.js"></script>
</body>
</html>