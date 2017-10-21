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
}

$product1 = new ShopProduct();
    $product1->title = "Milk";
    $product1->price = 50;
    $product1->comment = "Cost in RUR currency"; //new option for the object, dynamic definition - BAD!
    $product1->firstName = "Aleks";
    $product1->lastName = "Leonidov";
    print "Author: {$product1->firstName} "."{$product1->lastName}\n";
    
$product2 = new ShopProduct();