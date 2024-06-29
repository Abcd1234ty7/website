<?php

namespace Phppot;

use \Phppot\Cart;

session_start();

require_once __DIR__ . '/../Model/Cart.php';
require_once __DIR__ . '/../view/shopping-cart.php';

$cartModel = new Cart();

if (!empty($_POST["action"])) {
    switch ($_POST["action"]) {
        case "add":
            $cartModel->addToCart();
            break;
        case "edit":
            $totalPrice = $cartModel->editCart();
            print $totalPrice;
            exit; // No need for break after exit
        case "remove":
            $cartModel->removeFromCart();
            break;
        case "empty":
            $cartModel->emptyCart();
            break;
    }
}
