<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>auth</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href="#openModal">Личный кабинет</a>
<div id="openModal" class="modal">
    <a href="#" class="close">x</a>
    <form id="auth" method="post" action="handler.php">
        <div class="input">
            <label for="login">Введите логин:</label>
            <input name="login" id="login">
        </div>
        <div class="input">
            <label for="password">Введите пароль:</label>
            <input type="password" name="password" id="password">
        </div>
        <input type="submit" value="Авторизоваться">
    </form>
</div>
<script src="js/script.js"></script>
</body>
</html>