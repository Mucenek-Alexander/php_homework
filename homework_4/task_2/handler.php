<?php

$post = $_POST;

$storage = [
    'login' => 'qwe',
    'password' => '123'
];

if ($storage['login'] == $post['login'] && $storage['password'] == $post['password']) {
    echo 'success';
    } else {
    echo 'error';
}

