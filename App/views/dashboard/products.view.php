<?php
    loadPartial("head");
    loadPartial("navbar");
    loadPartial("admin-product", [
        'products'=> $products
    ]);