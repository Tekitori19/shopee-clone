<?php
require_once "../helpers.php";
loadPartial("head");
loadPartial("navbar");
loadPartial("showcase");
loadPartial("shop-container", [
    'products' => $products,
    'home' => $home
]);
loadPartial("bottom-banner");
loadPartial("footer");