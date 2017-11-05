<?php
/**
 * Created by PhpStorm.
 * User: Aleksey
 * Date: 02.10.2017
 * Time: 6:51
 */

class ShopProduct {
    public $title = "Standard Item";
    public $lastName = "Author last name";
    public $firstName = "Author first name";
    public $price = 0; //Cost of the item

    function __construct($title, $firstName, $lastName, $price) {
        $this->title = $title;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->price = $price;
    }

    function getProducer() {
        return "{$this->firstName} "
            . "{$this->lastName}";
    }
}

$product1 = new ShopProduct("Собачье сердце", "Михаил", "Булгаков", 10);
print "Author: {$product1->getProducer()}\n";