<?php
session_start();

var_dump(session_id());
var_dump($_SESSION['time_start']); // записывает время начала сессии (при обращении к function.php)

$_SESSION['time'] = time();
var_dump($_SESSION['time']);
if ($_SESSION['time_start'] + 100 < $_SESSION['time']) {
    session_regenerate_id();
}

