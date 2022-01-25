<?php

class ItemStorage{
    private $items = [];

    // добавление товара в хранилище,
    // товары в массиве хранятся по значению id:
    // id товара => товар
    public function add_item(Item $item){
        foreach ($this->items as $elem) {
            if ($elem->getItemId() === $item->getItemId()) {
                throw new Error('товар с таким id уже есть в хранилище');
            }
        }
        return $this->items[] = $item;
    }

    // написать реализацию следующих методов
    public function get_by_id(string $id){
        // возвращает товар по id
        // уже задним числом понял, как правильно реализовать метод через foreach) Если исходить из логики, что
        // id товара в хранилище всегда уникальный, то и такой вариант ОК?
        echo "Товар с id$id:";
        $key = array_search($id, $this->get_id());
        if ($key || $key === 0) {
            return $this->get_items()[$key];
        } else {
            return 'нет товара с таким id';
        }
    }

    public function get_by_title(string $title)
    {
        // возвращает товар по названию (title)
        echo "Товары с названием $title:";
        $items = [];
        foreach ($this->get_items() as $elem) {
            if ($title == $elem->getItemTitle()) {
                $items[] = $elem->getItem();
            }
        }
        if (count($items) === 0) {
            return 'нет товара с таким title';
        } else {
            return $items;
        }
    }

    public function get_by_price(int $price_from, int $price_to) {
        // возвращает товары, стоимость которых находится в диапазоне от $price_from до $price_to
        echo "Товары с ценой от $price_from до: $price_to";
        if ($price_from > $price_to) {
            return 'минимальная цена не может быть больше максимальной';
        }
        $items = [];
        foreach ($this->get_items() as $item) {
            if ($item->getItemPrice() >= $price_from && $item->getItemPrice() <= $price_to){
                $items[] = $item->getItem();
            }
        }
        if (count($items) === 0) {
            return 'нет подходящего товара';
        } else {
            return $items;
        }
    }

    public function get_by_material(...$materials) {
        // возвращает товары, которые изготовлены из материалов, перечисленных в $materials,
        // например,
        // при вызове в метод передаются ->get_by_material('дерево', 'железо', 'пластик');
        // значит метод должен вернуть все товары, сделанные из дерева, железа или пластика
        echo'Товары из материалов:';
        print_r($materials);
        $items = array_intersect_key($this->get_items(), array_intersect($this->get_materials(), $materials));
        if (count($items) === 0) {
            return 'нет подходящего товара';
        } else {
            return $items;
        }
    }

    public function get_by_price_and_material(int $price_to, string $material){
        // возвращает товары, стоимость которых не превышает $price_to и
        // материал, из которого изготовлен товар соответствует $material
        echo "Товары с ценой до $price_to из материала: $material";
        $items = [];
        foreach ($this->get_items() as $item) {
            if ($item->getItemPrice() <= $price_to && $item->getItemMaterial() == $material) {
                $items[] = $item;
            }
        }
        if (count($items) === 0) {
            return 'нет подходящего товара';
        } else {
            return $items;
        }
    }



    public function get_items()
    {
        $items = [];
        foreach ($this->items as $elem) {
            $items[] = $elem->getItem();
            }
        return $items;
    }

    public function get_id(){
        $items = [];
        foreach ($this->get_items() as $item) {
            $items[] = $item->getItemId();
        }
        return $items;
    }

    public function get_materials(){
        $items = [];
        foreach ($this->get_items() as $item) {
            $items[] = $item->getItemMaterial();
        }
        return $items;
    }

}