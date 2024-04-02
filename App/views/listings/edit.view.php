<?php
    loadPartial("head");
    loadPartial("navbar");
    loadPartial("edit-product", [
        'product' => $product
    ]);
    // loadPartial("bottom-banner");
    // loadPartial("footer");
?>