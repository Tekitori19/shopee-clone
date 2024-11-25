<?php

$errors = $errors ?? [];

loadPartial("head");
loadPartial("navbar");
loadPartial("edit-product", [
    'product' => $product,
    'errors' => $errors
]);
// loadPartial("bottom-banner");
loadPartial("footer");
