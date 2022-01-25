<?php

class Item
{
    private $id; // не может быть отрицательным или 0
    private $title; // максимум 10 символов
    private $price; // не может быть отрицательным или 0
    private $material; // минимум 3 символа
    // свойства title и id являются обязательными,
    // добавить все необходимые геттеры и сеттеры


    // setters
    public function setItemId(int $id)
    {
        if ($id <= 0) {
            throw new Error('id не может быть отрицательным или 0');
        }
        $this->id = $id;
    }

    public function setItemTitle(string $title)
    {
        if (strlen($title) > 20) {
            throw new Error('длинна title максимум 10 символов');
        }
        $this->title = $title;
    }

    public function setItemPrice(int $price)
    {
        if ($price <= 0) {
            throw new Error('price не может быть отрицательным или 0');
        }
        $this->price = $price;
    }

    public function setItemMaterial(string $material)
    {
        if (strlen($material) < 6) {
            throw new Error('material не меньше 3 символов');
        }
        $this->material = $material;
    }



    //getters
    // не придумал, как в setter запретить созданием объекта без указания id или title (без вызова соотв. setter)
    // поэтому наверное как-то так, чтобы нельзя быдло добавить такой товар в хранилище
    public function getItem()
    {
        if (!isset($this->id, $this->title)) {
            throw new Error('id и title обязательны');
        }
        return $this;
    }

    public function getItemId()
    {
        return $this->id;
    }

    public function getItemTitle()
    {
        return $this->title;
    }

    public function getItemPrice()
    {
        return $this->price;
    }

    public function getItemMaterial()
    {
        return $this->material;
    }
}

