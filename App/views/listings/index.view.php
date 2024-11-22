<?php
loadPartial("head");
loadPartial("navbar");
loadPartial("shop-container", [
    'products' => $products
]);
loadPartial("footer");

