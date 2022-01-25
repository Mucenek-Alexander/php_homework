<?php
// создать объекты Item (товар) и ItemStore (хранилище),
// добавить товары в хранилище
// вызвать методы поиска товаров в хранилище:
    // get_by_material,
    // get_by_price_and_material,
    // get_by_price

require_once 'item.php';
require_once 'itemStorage.php';

// создание объектов класса Item
$closet = new Item();
$closet->setItemId(1);
$closet->setItemTitle('шкаф');
$closet->setItemPrice(2500);
$closet->setItemMaterial('дерево');

$chair = new Item();
$chair->setItemId(3);
$chair->setItemTitle('стул');
$chair->setItemPrice(750);
$chair->setItemMaterial('пластик');

$table = new Item();
$table->setItemId(7);
$table->setItemTitle('стол');
$table->setItemPrice(1750);
$table->setItemMaterial('металл');

$stool = new Item();
$stool->setItemId(34);
$stool->setItemTitle('табурет');
$stool->setItemPrice(900);
$stool->setItemMaterial('дерево');

$stool_2 = new Item();
$stool_2->setItemId(47);
$stool_2->setItemTitle('табурет');
$stool_2->setItemPrice(2100);
$stool_2->setItemMaterial('металл');


// создание объекта класса ItemStorage
$storage = new ItemStorage();
// добавление объектов класса Item в объект класса ItemStorage
$storage->add_item($closet->getItem());
$storage->add_item($chair->getItem());
$storage->add_item($table->getItem());
$storage->add_item($stool->getItem());
$storage->add_item($stool_2->getItem());


// вызов методов объекта класса ItemStorage
var_dump($storage->get_by_id(47));
var_dump($storage->get_by_title('табурет'));
var_dump($storage->get_by_price(900, 2000));
var_dump($storage->get_by_material('дерево', 'металл'));
var_dump($storage->get_by_price_and_material(10000, 'дерево'));